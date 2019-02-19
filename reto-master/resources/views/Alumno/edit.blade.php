      
    @extends('layouts.layout')
    @section('content')

            
<!--Start of Single Job Post Area-->
<div class="single-job-post-area pt-70 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form method="POST">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                    <div class="single-job-content">
                        <div class="area-title text-center">
                                    <h2 class="pt-10 pb-10">EDITAR ALUMNO</h2>
                                </div>
                        <div class="single-job-form">

                            <div class="single-info mb-4">
                                <div class="title uppercase mt-58 mb-25"><span class="medium">Nombre / Apellidos</span></div>
                                <div class="form-box fix">
                                    <input type="text" id="nombreapellidos" name="nombreapellidos" value="{{$alumnos->nombreapellidos}}"> 
                                </div>
                            </div>
@if(session('message'))
  {{session('message')}}
@endif
                            <div class="single-info mb-4">
                                <div class="title uppercase mt-58 mb-25"><span class="medium">Dni</span></div>
                                <div class="form-box fix">
                                    <input type="text" id="dni" name="dni" value="{{$alumnos->dni}}">
                                </div>
                            </div>
                        
                            <div class="single-info mb-4">
                                <div class="title uppercase mt-58 mb-25"><span class="medium">Email</span></div>
                                <div class="form-box fix">
                                    <input type="text" id="email" name="email" value="{{$alumnos->email}}">
                                </div>
                            </div>

                            <div class="single-info mb-4">
                                 <div class="title uppercase mt-58 mb-25"><span class="medium">Telefono</span></div>
                                <div class="form-box fix">
                                    <input type="text" id="telefono" name="telefono" value="{{$alumnos->telefono}}">
                                </div>
                            </div>

                            <div class="single-info mb-4">
                                 <div class="title uppercase mt-58 mb-25"><span class="medium">Direccion</span></div>
                                <div class="form-box fix">
                                    <input type="text" id="direccion" name="direccion" value="{{$alumnos->direccion}}">
                                </div>
                            </div>

                             <div class="single-info mb-4">
                                 <div class="title uppercase mt-58 mb-25"><span class="medium">Ciudad</span></div>
                                <div class="form-box fix">
                                    <input type="text" id="ciudad" name="ciudad" value="{{$alumnos->ciudad}}">
                                </div>
                            </div>

                        </div>
                          
                        <div class="single-job-form">
                                                                       
                        <div class="mt-38">
                            <input type="submit" class="btn btn-info mb-15 w-25" id="guardar" name="guardar" value="Guardar">
                        </div>
                        </div>
                    </div>
                </form>
                <form action="{{ url('/alumno/index')}}">
                    <input type="submit" onclick="location.href='1.html';href="{{ url('/alumno/index')}}" class="btn btn-info mb-15 w-25" value="Atras">
                </form>
            </div>
        </div>
    </div>
</div>
<!--End of Single Job Post Area-->
    
    @stop