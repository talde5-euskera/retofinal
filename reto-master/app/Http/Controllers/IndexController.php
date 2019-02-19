<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alumno;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function personalog(){

    	$email = session('email');
    	$persona = "";

    	if(session('rol')=='alumno'){
    		$persona = DB::table('alumnos')->where('email', $email)->first();
    	}else{
    		$persona = DB::table('profesores')->where('email', $email)->first();
    	}
    	
    	
    	return view('index',compact('persona'));
    }
}
