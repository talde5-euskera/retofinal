<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\alumno;
use Illuminate\Support\Facades\Hash;
use Session;
use Excel;
use File;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos=alumno::all();
        return view('Alumno.index',compact('alumnos')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Alumno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //$this->validate($request,['nombreApellidos'=>'required', 'dni'=>'required', 'email'=>'required', 'password'=>'required']);
        $alumno= new alumno;
        //$alumno->foto=$request->input('foto')->move("images");
        $alumno->nombreapellidos=$request->input('nombreapellidos');
        $alumno->dni=$request->input('dni');
        $alumno->email=$request->input('email');
        $alumno->password=Hash::make($request->input('password'));
        $alumno->direccion=$request->input('direccion');
        $alumno->ciudad=$request->input('ciudad');
        $alumno->telefono=$request->input('telefono');
        $alumno->save();

        $alumnos=alumno::all();
        return redirect('alumno/index')->with('message','Alumno creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumnos=Alumno::find($id);
        return  view('Alumno.show',compact('alumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumnos=Alumno::find($id);
        return view('Alumno.edit',compact('alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       // $this->validate($request,['nombreApellidos'=>'required', 'dni'=>'required', 'email'=>'required', 'password'=>'required']);
        $alumno=Alumno::find($request->id);
        //$alumno->foto=$request->input('foto')->move("images");
        $alumno->nombreapellidos=$request->input('nombreapellidos');
        $alumno->dni=$request->input('dni');
        $alumno->email=$request->input('email');
        
        $alumno->direccion=$request->input('direccion');
        $alumno->ciudad=$request->input('ciudad');
        $alumno->telefono=$request->input('telefono');
        $alumno->save();

        $alumnos=alumno::all();
        return redirect('alumno/index')->with('message','Alumno editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumno::find($id)->delete();
        $alumnos=alumno::all();
        return redirect('alumno/index')->with('message','Alumno eliminado con exito');
}
    public function desactivar(Request $request){

        DB::table('alumnos')
            ->where('id', $request->id)
            ->update(array('baja' => 1));
        $alumnos=alumno::all();
        return redirect('alumno/index')->with('message','Alumno desactivado con exito');;

    }

    public function activar(Request $request){

        DB::table('alumnos')
            ->where('id', $request->id)
            ->update(array('baja' => 0));
        $alumnos=alumno::all();
        return redirect('alumno/index')->with('message','Alumno activado con exito');;

    }

    public function import(Request $request){
        //validate the xls file
        $this->validate($request, array(
            'file'      => 'required'
        ));
 
        if($request->hasFile('file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
 
                $path = $request->file->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
 
                    foreach ($data as $key => $value) {
                        $insert[] = [
                        'nombreapellidos' => $value->nombreapellidos,
                        'email' => $value->email,
                        'dni' => $value->dni,
                        'password' => Hash::make($value->password),
                        'direccion' => $value->direccion,
                        'telefono' => $value->telefono,
                        'baja' => $value->baja,
                        'foto' => $value->foto,
                        'idCurriculum' => $value->idCurriculum,
                        'idCurso' => $value->idCurso,
                        'ciudad' => $value->ciudad,
                        ];
                    }
 
                    if(!empty($insert)){
 
                        $insertData = DB::table('alumnos')->insert($insert);
                        if ($insertData) {
                            Session::flash('success', 'Your Data has successfully imported');
                        }else {                        
                            Session::flash('error', 'Error inserting the data..');
                            return back();
                        }
                    }
                }
 
                return redirect('alumno/index');
 
            }else {
                Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
                return back()->with('message','Alumnos añadidos con exito');
            }
        }
    }


}
