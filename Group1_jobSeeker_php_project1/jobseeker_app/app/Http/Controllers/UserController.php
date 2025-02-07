<?php

namespace App\Http\Controllers;
use DB;
use App\Models\User As User;
use App\Models\Company As Company;
use App\Models\Job As Job;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = DB::select('select * from users ');
        //return view('student.index',['students'=>$students]);
               return view('user.index')
                ->with('user_objects', $user);
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $jobs = Job::where('title', 'like', '%' . $query . '%')
                   ->orWhere('description', 'like', '%' . $query . '%')
                   ->get();

        $companies = Company::where('name', 'like', '%' . $query . '%')
                           ->orWhere('description', 'like', '%' . $query . '%')
                           ->get();

        return view('user.search_results', compact('jobs', 'companies', 'query'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        // DB::insert('insert into companies (name) values(?)',[$name]);
        // DB::insert('insert into companies (location) values(?)',[$location]);
        // DB::insert('insert into companies (description) values(?)',[$description]);

        $user = new User;
         $user->name = $name;
         $user->email = $email;
         $user->password= $password;


         $user->save();

         return redirect()->route('user.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        {
            $user_raw = DB::select('select * from users where id = ?',[$id]);
            if(count($user_raw)>0 && isset($user_raw[0])){
            $user_obj = $user_raw[0];
            return view('user.show',['user'=>$user_obj]);
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
        $user_raw = DB::select('select * from users where id = ?',[$id]);
        if(count($user_raw)>0 && isset($user_raw[0])){$user_obj = $user_raw[0];
           return view('user.edit',['user'=>$user_obj]);
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
        $email = $request->input('email');
        $password = $request->input('password');

 DB::update('update users set name = ? where id = ?',[$name,$id]);
 DB::update('update users set email = ? where id = ?',[$email,$id]);
 DB::update('update users set password = ? where id = ?',[$password,$id]);

 echo "Record updated succiessfully.<br/>";
 echo '<a href="/user">Click Here</a> to go back.';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
