@extends('layouts.layout')
@section('content')
        
        <!--Start of Single Job Post Area-->

        <div class="single-job-post-area pt-70 mb-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form action="#">

                            <div class="single-job-content">
                                <div class="area-title text-center">
                                    <h2 class="pt-10 pb-10">{{$ofertas->titulo}}</h2>
                                </div>
                                <div class="title uppercase pt-70 pb-26"><span>Descripcion</span></div>
                                <div class="single-job-form">
                                    <p> {{$ofertas->descripcion}}</p>
                                </div>
                                <div class="title uppercase mt-58 mb-25"><span class="medium">Funciones</span></div>
                                <div class="single-job-form">
                                    <div class="single-info mb-14">
                                        <p >
                                            {{$ofertas->funciones}}
                                        </p>
                                    </div>
                                </div>
                                <div class="title uppercase mt-58 mb-25"><span>Requisitos</span></div>
                                <div class="single-job-form">
                                    <div class="single-info mb-14">
                                        <p>
                                            {{$ofertas->requisitos}}
                                        </p>
                                    </div>
                                </div>
                
                                <div class="mt-38">
                                    <!-- SI ESTAS LOGEADO COMO ALUMNO -->
                                    @if(session('rol') == "alumno")

                                        <?php $alumno_apuntado = "falso" ?>

                                        @foreach ($apuntado as $apuntados)

                                            @if(session('idlogin') == $apuntados->idAlumno )
                                                <!-- SI EL ALUMNO ESTA APUNTADO A LA OFERTA -->
                                                <?php $alumno_apuntado = "verdad" ?>

                                            @endif

                                        @endforeach
                                        <!-- VISUALIZA EL BOTON SI EL ALUMNO NO ESTA APUNTADO  -->
                                        @if($alumno_apuntado == "falso")
                                            <a href="{{ url('/oferta/apuntarse/'.$ofertas->id)}}" class="button button-large-box lg-btn mr-20">Apuntarse</a>
                                        @else
                                            <?php echo "<p style='color:red;'>Ya estas apuntado a la oferta</p>" ?>
                                        @endif

                                    @endif

                                    @if(session('rol') != "alumno")
                                    <a href="{{ url('/oferta/edit/'.$ofertas->id)}}" class="button button-large-box lg-btn mr-20">Editar</a>
                                    @endif
                                    <a href="{{ url('/oferta/index')}}" class="button button-large-box lg-btn">Atras</a>
                                </div>
                            </div>
                        </form>    
                    </div>
                </div>
            </div>
        </div>
  @stop
        <!--End of Single Job Post Area--