<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminLogin1');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function authenticate(Request $request)
    {
         $username=$request->input('username');
        $Password=$request->input('password');
        
        $loginData=DB :: table('admins')->where (['name'=>$username,'password'=>$Password])->get();
        if (count($loginData)>0)
        {

            echo("Log in succesfully");
            return view('layouts/admin');
        }
        else 
        {
            echo "oops!!! Try Again admin";
            return view('adminLogin1');
        }
        // $userName=$request->input('username');
        // $password=$request->input('password');
        // $username=Str::equals($userName, 'admin@gmail.com');
        // $password1=Str::equals($password, '12345');
        //  if($username == $password1)
        // {
        //     echo("Log in succesfully");
        //     return view('layouts/admin');
        // }
        // else 
        // {
        //     echo "oops!!! Try Again";
        //     return view('adminLogin');
        // }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
    public function showLoginForm(){
        return view('adminLogin1');
    }
}
