  
@extends('layouts.layout')
@section('content')


<!--Start of Single Job Post Area-->
<div class="single-job-post-area pt-70 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="{{ url('/profesor/insertar')}}">
                    <div class="single-job-content">
                        <div class="title uppercase pt-50 pb-38"><span class="lg">insertar nuevo profesor</span>
                        </div>
                        <div class="single-job-form">

                            <div class="single-info pb-14">
                                <label for="nombreapellidos" class="uppercase pull-left m-0">Nombre/Apellidos</label>
                                <div class="form-box fix">
                                    <input type="text" id="nombreapellidos" name="nombreapellidos" placeholder="Introduzca nombre y apellidos" required>
                                </div>
                            </div>

                            <div class="single-info mb-14">
                                <label for="dni" class="uppercase pull-left m-0">DNI</label>
                                <div class="form-box fix">
                                    <input type="text" id="dni" name="dni" placeholder="Introduzca DNI" required>
                                </div>
                            </div> 

                            <div class="single-info mb-14">
                                <label for="email" class="uppercase pull-left m-0">Email</label>
                                <div class="form-box fix">
                                    <input type="text" id="email" name="email" placeholder="Introduzca una dirección de correo electronico" required>
                                </div>
                            </div>

                            <div class="single-info mb-14">
                                <label for="password" class="uppercase pull-left m-0">Contraseña</label>
                                <div class="form-box fix">
                                    <input type="text" id="password" name="password" placeholder="Establezca una contraseña" required>
                                </div>
                            </div>

                             <div class="single-info mb-14">
                                <label for="address" class="uppercase pull-left m-0">Dirección</label>
                                <div class="form-box fix">
                                    <input type="text" id="direccion" name="direccion" placeholder="Introduzca una dirección" required>
                                </div>
                            </div>

                            <div class="single-info mb-14">
                                <label for="ciudad" class="uppercase pull-left m-0">Ciudad</label>
                                <div class="form-box fix">
                                    <input type="text" id="ciudad" name="ciudad" placeholder="Introduzca su ciudad de residencia" required>
                                </div>
                            </div>

                            <div class="single-info mb-14">
                                <label for="telefono" class="uppercase pull-left m-0">Teléfono</label>
                                <div class="form-box fix">
                                    <input type="text" id="telefono" name="telefono" placeholder="Introduzca su teléfono de contacto" required>
                                </div>
                            </div>

                            <div class="single-info mb-14">
                                <label for="school_name" class="uppercase pull-left m-0" >Departamento</label>
                                    <select class="selectpicker" id="departamento" name="departamento">
                                        <option>Informatica</option>
                                        <option>Administracion y Finanzas</option>
                                        <option>Quimica</option>
                                        <option>Comercio y Marketing</option>
                                        <option>Electricidad-Electronica</option>
                                    </select>
                            </div>

                            
                       
                             <div class="mt-38">
                                 <input type="submit" class="btn btn-info mb-15 w-25" id="guardar" name="guardar" value="Guardar">

                            </div>
                        </div>
                    </div>
                </form>
                <form action="{{ url('/profesor/index')}}">
                    <input type="submit" onclick="location.href='1.html';href="{{ url('/profesor/index')}}" class="btn btn-info mb-15 w-25" value="Atras">
                </form>
            </div>
        </div>
    </div>
</div>
<!--End of Single Job Post Area-->
@stop