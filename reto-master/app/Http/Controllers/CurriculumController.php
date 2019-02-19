<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curriculum;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curriculums=Curriculum::orderBy('idCurriculum','DESC');
        return view('Curriculum.index',compact('curriculums')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Curriculum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['archivo'=>'required']);
        Curriculum::create($request->all());
        return redirect()->route('curriculum.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $curriculums=Curriculum::find($id);
        return  view('curriculum.show',compact('curriculums'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curriculums=Curriculum::find($id);
        return view('curriculum.edit',compact('curriculum'));
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
        $this->validate($request,['archivo'=>'required']);
        Curriculum::find($id)->update($request->all());
        return redirect()->route('curriculum.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Curriculum::find($id)->delete();
        return redirect()->route('curriculum.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
