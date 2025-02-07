<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\CompanyJob As CompanyJob;
use App\Models\Company As Company;
use App\Models\Job As Job;

class Company_jobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = DB::select('select * from company_jobs ');
        //return view('student.index',['students'=>$students]);
               return view('company_jobs.index')
                ->with('company_jobs_objects', $company);

        // $company = DB::select('select * from company_jobs where company_id = ?',[$id] );

        // return view('company_jobs.index')
        // ->with('company_jobs_objects', $company);
        


    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company_jobs.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $title = $request->input('title');

      

        $company = new CompanyJob;
         $company->company_id= $name;
         $company->job_id = $title;


         $company->save();

         return redirect()->route('company_jobs.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        {
            // $company_raw = DB::select('select * from company_jobs where company_id = ?',[$id]);
            // if(count($company_raw)>0 && isset($company_raw[0])){
            // $company_obj = $company_raw[0];
            // return view('company_jobs.show',['company_jobs'=>$company_obj]);
            // }
            // else{
            // abort(404);
            // }
            $company = DB::select('select * from company_jobs where company_id = ?',[$id] );

return view('company_jobs.index')
->with('company_jobs_objects', $company);
            }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
//         $company_raw = DB::select('select * from company_jobs where companyjob_id = ?',[$id]);
//  if(count($company_raw)>0 && isset($company_raw[0])){$company_obj = $company_raw[0];
//     return view('company_jobs.edit',['company_jobs'=>$company_obj]);
//     }
//     else{
//     abort(404);
//     }


    

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//         $name = $request->input('company_id');
//         $title = $request->input('job_id');

//  DB::update('update company_jobs set company_id = ? where companyjob_id = ?',[$name,$id]);
//  DB::update('update company_jobs set job_id = ? where companyjob_id = ?',[$title,$id]);

//  echo "Record updated succiessfully.<br/>";
//  echo '<a href="/company_jobs">Click Here</a> to go back.';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $companyjob_id)
    {
        // DB::delete('delete from companies where company_id = ?',[$id]);
        $company = CompanyJob::find($companyjob_id);
        $company->delete();
        echo "Record deleted successfully.<br/>";
        echo '<a href="/company">Click Here</a> to go back.';
        }
}
