<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\oferta;
use App\alumno;
use App\apuntado;

class OfertaController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertas=Oferta::all();
        return view('Oferta.index',compact('ofertas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Oferta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  $this->validate($request,['titulo'=>'required', 'empresa'=>'required', 'localizacion'=>'required', 'sector'=>'required', 'descripcion'=>'required', 'funciones'=>'required', 'requisitos'=>'required',]);
        $oferta= new oferta;
        $oferta->titulo=$request->input('titulo');
        $oferta->empresa=$request->input('empresa');
        $oferta->localizacion=$request->input('localizacion');
        $oferta->sector=$request->input('sector');
        $oferta->descripcion=$request->input('descripcion');
        $oferta->funciones=$request->input('funciones');
        $oferta->requisitos=$request->input('requisitos');
        $oferta->save();
        
        $ofertas=oferta::all();
        return redirect('oferta/index')->with('message','Oferta añadido con exito');
        //return redirect()->route('oferta.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $ofertas=Oferta::find($id);
       $apuntado=Apuntado::all()->where('idOferta',$id);
       return  view('Oferta.show', compact('ofertas'), compact('apuntado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ofertas=Oferta::find($id);
        return view('Oferta.edit',compact('ofertas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $oferta=Oferta::find($request->id);
        $oferta->titulo=$request->input('titulo');
        $oferta->descripcion=$request->input('descripcion');
        $oferta->funciones=$request->input('funciones');
        $oferta->requisitos=$request->input('requisitos');
       
        $oferta->save();

        $oferta=oferta::all();
        return redirect('oferta/index')->with('message','Oferta editada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Oferta::find($id)->delete();
        $oferta=oferta::all();
        return redirect('oferta/index')->with('message','Oferta eliminada con exito');;
    }

    public function apuntar($id){

        
        $apuntado=Apuntado::all()->where('idOferta',$id);
        $alumnos=Alumno::all();
        return  view('Oferta.apuntados', compact('apuntado'), compact('alumnos'));
    }

    public function quitarlista($id){
        
        
        $borrar = Apuntado::where('idAlumno', $id);
        $borrar->delete();
        return redirect()->back()->with('message','Alumno quitado de la lista');;
    }
    public function apuntarse($id){

        
        $apuntado= new apuntado;
        $apuntado->idAlumno = session('idlogin');
        $apuntado->idOferta = $id;
        $apuntado->save();
        return redirect()->back();
    }
}