      
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
                                    <h2 class="pt-10 pb-10">EDITAR OFERTA</h2>
                                </div>
                        <div class="single-job-form">

                            <div class="single-info mb-4">
                                <div class="title uppercase mt-58 mb-25"><span class="medium">Titulo</span></div>
                                <div class="form-box fix">
                                    <input type="text" id="titulo" name="titulo" value="{{$ofertas->titulo}}"> 
                                </div>
                            </div>
                           

                            <div class="single-info mb-4">
                                 <div class="title uppercase mt-58 mb-25"><span class="medium">Descripcion</span></div>
                                <div class="form-box fix">
                                    <input type="text" id="descripcion" name="descripcion" value="{{$ofertas->descripcion}}">
                                </div>
                            </div>

                            <div class="single-info mb-4">
                                 <div class="title uppercase mt-58 mb-25"><span class="medium">Funciones</span></div>
                                <div class="form-box fix">
                                    <input type="text" id="funciones" name="funciones" value="{{$ofertas->funciones}}">
                                </div>
                            </div>

                             <div class="single-info mb-4">
                                 <div class="title uppercase mt-58 mb-25"><span class="medium">Requisitos</span></div>
                                <div class="form-box fix">
                                    <input type="text" id="requisitos" name="requisitos" value="{{$ofertas->requisitos}}">
                                </div>
                            </div>

                        </div>
                          
                        <div class="single-job-form">
                                                                       
                        <div class="mt-38">
                             <input type="submit" class="btn btn-info mb-15 w-25"name="editar" value="Editar">
                        </div>
                        </div>
                    </div>
                </form>
                <form action="{{ url('/oferta/index')}}">
                    <input type="submit" onclick="location.href='1.html';href="{{ url('/oferta/index')}}" class="btn btn-info mb-15 w-25" value="Atras">
                </form>
            </div>
        </div>
    </div>
</div>
<!--End of Single Job Post Area-->
 @stop