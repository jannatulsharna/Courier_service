<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sample_data;

class FirstController extends Controller
{
    public function index(){

    	echo" My First Project";
    } 
     public function homepage(){

    	return view('home');
    }
    public function register(){

        return view('auth/register');
    }
     public function Parcel(){
        $Parcel = sample_data::all();
        return view('Parcel')->with('Parcel',$Parcel);


    	//return view('Parcel');
    }
    public function Courier(){

    	return view('Courier');
    }
    public function contact(){

    	return view('contactUs');
    }
    public function branch(){

        return view('seeBranch');
    }
}
