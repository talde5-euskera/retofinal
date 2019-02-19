  
@extends('layouts.layout')
@section('content')


<!--Start of Single Job Post Area-->
<div class="single-job-post-area pt-70 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="{{ url('/oferta/insertar')}}">
                    <div class="single-job-content">
                        <div class="title uppercase pt-50 pb-38"><span class="lg">Crear nueva oferta</span>
                        </div>
                        <div class="single-job-form">

                            <div class="single-info pb-14">
                                <label for="titulo" class="uppercase pull-left m-0">Título</label>
                                <div class="form-box fix">
                                    <input type="text" id="titulo" name="titulo" placeholder="Introduzca el titulo de la oferta" required>
                                </div>
                            </div>

                            <div class="single-info mb-14">
                                <label for="empresa" class="uppercase pull-left m-0">Empresa</label>
                                <div class="form-box fix">
                                    <input type="text" id="empresa" name="empresa" placeholder="Introduzca el nombre de la empresa" required>
                                </div>
                            </div> 

                            <div class="single-info mb-14">
                                <label for="localizacion" class="uppercase pull-left m-0">Localización</label>
                                <div class="form-box fix">
                                    <input type="text" id="localizacion" name="localizacion" placeholder="Introduzca la localización del puesto de trabajo" required>
                                </div>
                            </div>

                            <div class="single-info mb-14">
                                <label for="sector" class="uppercase pull-left m-0">Sector</label>
                                <div class="form-box fix">
                                    <input type="text" id="sector" name="sector" placeholder="Introduzca el sector" required>
                                </div>
                            </div>

                             <div class="single-info mb-14">
                                <label for="descripcion" class="uppercase pull-left m-0">Descripcion</label>
                                <div class="form-box fix">
                                    <input type="text" id="descripcion" name="descripcion" placeholder="Introduzca la descripción de la oferta" required>
                                </div>
                            </div>

                            <div class="single-info mb-14">
                                <label for="funciones" class="uppercase pull-left m-0">Funciones</label>
                                <div class="form-box fix">
                                    <input type="text" id="funciones" name="funciones" placeholder="Introduzca las funciones que se realizarán en el puesto" required>
                                </div>
                            </div>

                            <div class="single-info mb-14">
                                <label for="requisitos" class="uppercase pull-left m-0">Requisitos</label>
                                <div class="form-box fix">
                                    <input type="text" id="requisitos" name="requisitos" placeholder="Introduzca los requisitos para desempeñar el puesto" required>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info mb-15 w-25"name="guardar" value="Guardar"> 
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