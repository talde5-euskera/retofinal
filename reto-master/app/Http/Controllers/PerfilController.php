<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\alumno;
use App\profesor;

class PerfilController extends Controller
{
    //
    public function cargarperfil(){

    	$id = session('idlogin');
    	$perfil = "";
    	if(session('rol') == "alumno"){

    		$perfil=Alumno::find($id);
        	
    	}else{

    		$perfil=Profesor::find($id);

    	}
    	return  view('verperfil',compact('perfil'));
    }
    public function cargarperfileditar(Request $request){

    	$id = session('idlogin');
    	$perfil = "";
    	if(session('rol') == "alumno"){

    		$perfil=Alumno::find($id);
        	
    	}else{

    		$perfil=Profesor::find($id);

    	}
    	return  view('perfil',compact('perfil'));
    }
    public function actualizar(Request $request){

    	$id = session('idlogin');
    	$perfil = "";
    	if(session('rol') == "alumno"){

    		$perfil=Alumno::find($id);
        	
    	}else{

    		$perfil=Profesor::find($id);

    	}

        $perfil->nombreapellidos=$request->input('nombreapellidos');
        $perfil->dni=$request->input('dni');
        $perfil->email=$request->input('email');     
        $perfil->direccion=$request->input('direccion');
        $perfil->ciudad=$request->input('ciudad');
        $perfil->telefono=$request->input('telefono');

        

        $perfil->save();

        $alumnos=alumno::all();
        return redirect('perfil')->with('message', 'Alumno editado');
    }


}
