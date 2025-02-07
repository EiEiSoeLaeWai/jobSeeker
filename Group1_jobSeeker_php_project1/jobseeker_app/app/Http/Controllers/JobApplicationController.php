<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\JobApplication As JobApplication;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('company_user.jobapply');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // if ($request->hasFile('image')) {
        //     $photo = new JobApplication;
        //     $photo->cv = $request->file('image')->store('image','public');
        //     $photo->save();
        // }
        // $name = $request->input('image');
        // $photo = new JobApplication;
        // $photo->cv = $name;
        


        // $photo->save();

        // return redirect()->route('company_user.success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('company_user.jobapply');

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
