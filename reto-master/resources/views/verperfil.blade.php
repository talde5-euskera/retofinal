@extends('layouts.layout')
@section('content')
        
        <!--Start of Single Job Post Area-->

        <div class="single-job-post-area pt-70 mb-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form action="">

                            <div class="single-job-content md-6">
                                <div class="area-title text-center">
                                    <h2 class="pt-10 pb-10">{{$perfil->nombreapellidos}}</h2>
                                </div>

                                 <div class="title uppercase mt-58 mb-25"><span class="medium">DNI</span></div>
                                <div class="single-job-form">
                                    <div class="single-info mb-14">
                                        <p >
                                            {{$perfil->dni}}
                                        </p>
                                    </div>
                                </div>

                                <div class="title uppercase mt-58 mb-25"><span class="medium">Email</span></div>
                                <div class="single-job-form">
                                    <div class="single-info mb-14">
                                        <p >
                                            {{$perfil->email}}
                                        </p>
                                    </div>
                                </div>

                                <div class="title uppercase mt-58 mb-25"><span>Telefono</span></div>
                                <div class="single-job-form">
                                    <div class="single-info mb-14">
                                        <p>
                                            {{$perfil->telefono}}
                                        </p>
                                    </div>
                                </div>

                                <div class="title uppercase mt-58 mb-25"><span>Direccion</span></div>
                                <div class="single-job-form">
                                    <div class="single-info mb-14">
                                        <p>
                                            {{$perfil->direccion}}
                                        </p>
                                    </div>
                                </div>

                                <div class="title uppercase mt-58 mb-25"><span>Ciudad</span></div>
                                <div class="single-job-form">
                                    <div class="single-info mb-14">
                                        <p>
                                            {{$perfil->ciudad}}
                                        </p>
                                    </div>
                                </div>
                
                                <div class="mt-38">
                                    <a href="{{ url('/perfil/editar' )}}" class="button button-large-box lg-btn mr-20">Editar</a>
                                    <a href="{{ url('/index')}}" class="button button-large-box lg-btn">Atras</a>
                                </div>
                            </div>
                        </form>    
                    </div>
                </div>
            </div>
        </div>
  @stop
        <!--End of Single Job Post Area-->