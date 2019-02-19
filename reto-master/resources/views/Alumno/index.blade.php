@extends('layouts.layout')
@section('content')
<script>
  var msg = '{{Session::get('message')}}';
  var exist = '{{Session::has('message')}}';
  if(exist){
    alert(msg);
  }
</script>
<!-- End of Header Area -->
<!--Start of Candidates Area-->
    <div class="candidates-area ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center ">
                        <h2 class="uppercase">Mis alumnos</h2>
                        <div class="separator mt-35 mb-77">
                            <span><img src=" {{ asset('images/icons/1.png')}}" alt=""></span>
                        </div>
                    <!--INICIO FILTROS-->
                        <div class="container mb-20">
                        <h4 class="text-left">Filtrar por estudios</h4>

                    <select class="selectpicker " >
                      <optgroup label="Informatica">
                        <option>Desarrollo de Aplicaciones Multiplataforma</option>
                        <option>Desarrollo de Aplicaciones Web</option>
                        <option>Administracion de Sistemas Informaticos en Red</option>
                        <option>Sistemas Microinformáticos y Redes</option>
                      </optgroup>
                      <optgroup label="Administracion y Finanzas">
                        <option>Administracion y Finanzas</option>
                        <option>Gestión de Ventas y Espacios Comerciales</option>                      
                      </optgroup>
                      <optgroup label="Quimica">
                        <option>Laboratorio de Analisis y de Control de Calidad</option>                      
                      </optgroup>
                       <optgroup label="Comercio y Marketing">
                        <option>Actividades Comerciales</option>                      
                      </optgroup>
                       <optgroup label="Electricidad-Electronica">
                        <option>Instalaciones de Comunicaciones</option>                      
                      </optgroup>
                    </select>
            
                    </div>
                    <!--FIN FILTROS-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="job-post-container fix mb-70">

             
                @foreach($alumnos as $alumno) 


                        <div class="single-job-post fix">
                            <div class="job-title col-3 pl-30">
                                
                                <span class="pull-left block mtb-17">
                                    <a href="#"><img src= "{{ asset($alumno->foto) }} "width="72" alt="noFoto"></a>
                                </span>
                                <div class="fix pl-30 mt-29">
                                    <h4 class="mb-5"> {{$alumno->nombreapellidos}} </h4>
                                </div>
                            </div>
                            <div class="address col-3 pl-100">
                                <span class="mtb-30 block"> {{$alumno->dni}} </span>
                                @if($alumno->baja == 0)
                                <span class="mtb-30 block" style="color:green"> Activo </span>
                                @else
                                <span class="mtb-30 block" style="color:red"> No activo </span>
                                @endif
                            </div>
                            <div class="keyword col-4 pl-20 pt-39">
                                <a href="{{ url('/alumno/show/'.$alumno->id )}}" class="button mr-10">&#9997; Detalles</a>
                                @if($alumno->baja == 0)
                                <a href="{{url('/alumno/desactivar/'.$alumno->id)}}" class="button mr-10">Desactivar</a>
                                @else
                                <a href="{{url('/alumno/activar/'.$alumno->id)}}" class="button mr-10">
                                Activar</a>
                                @endif
                                <a href="{{url('/alumno/eliminar/'.$alumno->id)}}" class="button">&#x2717; Eliminar</a>
                            </div>
                        </div>
              @endforeach

                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ url('/alumno/create')}}" class="button large-button">Añadir Alumno</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Candidates Area -->
                
    @stop