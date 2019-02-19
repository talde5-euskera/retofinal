
@extends('layouts.layout')
@section('content')


<!--Start of Single Job Post Area-->
<div class="single-job-post-area pt-70 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                         <!--IMPORTAR CSV-->
                         <div class="title uppercase pb-38"><span class="lg">INSERTAR CSV</span>
                        </div>
                    <form action="{{ url('/alumno/insertarcsv')}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                        <div class="single-info mb-14 fix">
                            <label for="photo" class="uppercase pull-left m-0">CSV Alumnos</label>
                            <div class="photo-uploader fix pull-left" id="fileupload">
                                <input type="file" name="file" class="form-control" placeholder="Sube tu CSV aquí">
                                <span class="filename">Sube tu CSV aquí</span>
                                <span class="action">Buscar</span>
                            </div>
                        </div>
                            <div class="mt-38">
                                <input type="submit" class="btn btn-info mb-15 w-25" id="guardar" name="guardar" value="Guardar">
                            </div>

                    <!--FIN IMPORTAR CSV-->
                </form>

                <form action="{{ url('/alumno/insertar')}}">
                    <div class="single-job-content">
                        <div class="title uppercase pt-50 pb-38"><span class="lg">INSERTAR NUEVO ALUMNO</span>
                        </div>
                        <div class="single-job-form">
                            <div class="single-info mb-14 fix">
                                <label for="photo" class="uppercase pull-left m-0">Foto</label>
                                <div class="photo-uploader fix pull-left" id="fileupload">
                                    <input type="file" id="foto" name="foto">
                                     <span class="filename">Sube tu foto aquí</span> 
                                     <span class="action">Buscar</span> 
                                </div>
                            </div>

                            <div class="single-info pb-14">
                                <label for="nombreapellidos" class="uppercase pull-left m-0">Nombre/apellidos</label>
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
                                    <input type="text" id="password" name="password" placeholder="Introduzca una contraseña" required>
                                </div>
                            </div>

                             <div class="single-info mb-14">
                                <label for="direccion" class="uppercase pull-left m-0">Dirección</label>
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
                                <label for="curso" class="uppercase pull-left m-0">Curso</label>
                                <!--INICIO FILTROS-->
                    
                                    <select class="selectpicker " id="curso" name="curso">
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
        
                    <!--FIN FILTROS-->
                    
                            </div>
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