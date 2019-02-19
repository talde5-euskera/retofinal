@extends('layouts.layout')
@section('content')
<!-- End of Header Area -->
<!--Start of Candidates Area-->
    <div class="candidates-area ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center ">
                        <h2 class="uppercase">Alumnos apuntados</h2>
                        <div class="separator mt-35 mb-77">
                            <span><img src=" {{ asset('images/icons/1.png')}}" alt=""></span>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="job-post-container fix mb-70">

             
                @foreach($alumnos as $alumno) 
                    @foreach($apuntado as $apuntados)
                        @if($alumno->id == $apuntados->idAlumno)
    

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
                            </div>
                            <div class="keyword col-4 pl-20 pt-39">
                                <a href="{{ url('/alumno/show/'.$alumno->id )}}" class="button mr-10">&#9997; Ver</a>
                                <a href="{{url('/oferta/quitarlista/'.$alumno->id)}}" class="button mr-10">Quitar de la lista</a>
                            </div>
                        </div>
                        @endif
                    @endforeach
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