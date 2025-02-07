<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Company As Company;
use App\Models\Job As Job;
use App\Models\CompanyJob As CompanyJob;
use App\Models\ApplyForm As ApplyForm;

class Company_userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = DB::select('select * from companies ');
               return view('company_user.index')
                ->with('company_objects', $company);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company_user.jobapply');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
     {
    //     $name = $request->input('image');
    //     $photo = new JobApplication;
    //     $photo->cv = $name;
        


    //     $photo->save();

    //     return redirect()->route('company_user.success');

        $name = $request->input('name');
        $email = $request->input('email');
        $description = $request->input('description');
        $company_name = $request->input('company_name');
        $title = $request->input('title');


       

        $company = new ApplyForm;
         $company->name = $name;
         $company->email = $email;
         $company->description= $description;
         $company->company_id= $company_name;
         $company->job_id= $title;




         $company->save();
         echo "Application submitted succiessfully.<br/>";
         echo '<a href="/company_user">Click Here</a> to go back.';
        //  return redirect()->route('company_user.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company = DB::select('select * from company_jobs where company_id = ?',[$id] );

        return view('company_user.details')
        ->with('company_jobs_objects', $company);

        // {$company = DB::select('select * from company_jobs where company_id = ?',[$id] );

        //     return view('company_user.jobapply')
        //     ->with('company_jobs_objects', $company);}
                    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
