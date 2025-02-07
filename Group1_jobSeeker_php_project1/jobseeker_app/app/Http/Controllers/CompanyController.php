<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Company As Company;
use App\Models\Job As Job;
use App\Models\CompanyJob As CompanyJob;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = DB::select('select * from companies ');
        //return view('student.index',['students'=>$students]);
               return view('company.index')
                ->with('company_objects', $company);

        

     
    }
    // public function search(Request $request)
    // {
    //     $query = $request->input('query');

    //     $companies = Company::where('name', 'like', '%' . $query . '%')
    //                         ->orWhere('description', 'like', '%' . $query . '%')
    //                         ->get();

    //     return view('company.search_result', compact('companies', 'query'));
    // }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $jobs = Job::where('title', 'like', '%' . $query . '%')
                   ->orWhere('description', 'like', '%' . $query . '%')
                   ->get();

        $companies = Company::where('name', 'like', '%' . $query . '%')
                           ->orWhere('description', 'like', '%' . $query . '%')
                           ->get();

        return view('company.search_result', compact('jobs', 'companies', 'query'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('company.create');
    }

  
 

  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $name = $request->input('name');
        $location = $request->input('location');
        $description = $request->input('description');

       

        $company = new Company;
         $company->name = $name;
         $company->location = $location;
         $company->description= $description;


         $company->save();
       
         return redirect()->route('company.index');

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        {
            $company_raw = DB::select('select * from companies where company_id = ?',[$id]);
            if(count($company_raw)>0 && isset($company_raw[0])){
            $company_obj = $company_raw[0];
            return view('company.show',['company'=>$company_obj]);
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
        $company_raw = DB::select('select * from companies where company_id = ?',[$id]);
 if(count($company_raw)>0 && isset($company_raw[0])){$company_obj = $company_raw[0];
    return view('company.edit',['company'=>$company_obj]);
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
        $name = $request->input('name');
        $location = $request->input('location');
        $description = $request->input('description');

 DB::update('update companies set name = ? where company_id = ?',[$name,$id]);
 DB::update('update companies set location = ? where company_id = ?',[$location,$id]);
 DB::update('update companies set description = ? where company_id = ?',[$description,$id]);

 echo "Record updated succiessfully.<br/>";
 echo '<a href="/company">Click Here</a> to go back.';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $company_id)
    
        {
            // DB::delete('delete from companies where company_id = ?',[$id]);
            $company = company::find($company_id);
            $company->delete();
            echo "Record deleted successfully.<br/>";
            echo '<a href="/company">Click Here</a> to go back.';
            }
    
}
