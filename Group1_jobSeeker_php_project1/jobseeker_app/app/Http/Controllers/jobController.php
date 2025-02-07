<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Job As Job;

class jobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $job = DB::select('select * from jobs ');
               return view('job.index')
                ->with('job_objects', $job);
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $jobs = Job::where('title', 'like', '%' . $query . '%')
                            ->orWhere('description', 'like', '%' . $query . '%')
                            ->get();

        return view('job.search_result', compact('jobs', 'query'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title= $request->input('title');
        $postDate= $request->input('postDate');
        $description = $request->input('description');

       

        $job = new Job;
         $job->title= $title;
         $job->postDate = $postDate;
         $job->description= $description;


         $job->save();

         return redirect()->route('job.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        {
            $job_raw = DB::select('select * from jobs where job_id = ?',[$id]);
            if(count($job_raw)>0 && isset($job_raw[0])){
            $job_obj = $job_raw[0];
            return view('job.show',['job'=>$job_obj]);
            }
            else{
            abort(404);
            }
            }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $job_raw = DB::select('select * from jobs where job_id = ?',[$id]);
        if(count($job_raw)>0 && isset($job_raw[0])){$job_obj = $job_raw[0];
           return view('job.edit',['job'=>$job_obj]);
           }
           else{
           abort(404);
           }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $title = $request->input('title');
        $postDate = $request->input('postDate');
        $description = $request->input('description');

 DB::update('update jobs set title = ? where job_id = ?',[$title,$id]);
 DB::update('update jobs set postDate = ? where job_id = ?',[$postDate,$id]);
 DB::update('update jobs set description = ? where job_id = ?',[$description,$id]);

 echo "Record updated succiessfully.<br/>";
 echo '<a href="/job">Click Here</a> to go back.';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $job_id)
    {

        $job = Job::find($job_id);
        $job->delete();
        echo "Record deleted successfully.<br/>";
        echo '<a href="/job">Click Here</a> to go back.';
    }

   
}
