    
    @extends('layouts.layout')
    @section('content')
               
              
                <!--Start of Single Job Post Area-->
                <div class="single-job-post-area pt-70 mb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <form action="{{ url('/perfil/actualizar/'.session('idlogin'))}}">
                                    <div class="single-job-content">
                                        <div class="area-title text-center">
		                                    <h2 class="pt-10 pb-10">MI PERFIL</h2><br/>
		                                </div>
                                        <div class="single-job-form">

                                        	<div class="single-info pb-14">
                                                <label for="nombreapellidos" class="uppercase pull-left m-0">Nombre/Apellidos</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="nombreapellidos" name="nombreapellidos" value="{{$perfil->nombreapellidos}}">
                                                </div>
                                            </div>

                                            <div class="single-info pb-14">
                                                <label for="dni" class="uppercase pull-left m-0">DNI</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="dni" name="dni" value="{{$perfil->dni}}">
                                                </div>
                                            </div>

                                            <div class="single-info mb-14">
                                                <label for="email" class="uppercase pull-left m-0">Correo</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="email" name="email" value="{{$perfil->email}}">
                                                </div>
                                            </div>   
                                        </div>
                                        
                                        <div class="single-job-form">
                                            <div class="single-info mb-14">
                                                <label for="direccion" class="uppercase pull-left m-0">Dirección</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="direccion" name="direccion" value="{{$perfil->direccion}}">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                <label for="ciudad" class="uppercase pull-left m-0">Ciudad</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="ciudad" name="ciudad" value="{{$perfil->ciudad}}">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                <label for="telefono" class="uppercase pull-left m-0">Teléfono</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="telefono" name="telefono" value="{{$perfil->telefono}}">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- PARA QUE SOLO SE LO VISIONE A UN ALUMNO -->
                                        @if(session('rol') == "alumno")
                                            <div class="single-info mb-14 fix">
                                                    <label for="photo" class="uppercase pull-left m-0">Curriculum Vitae</label>
                                                    <div class="photo-uploader fix pull-left" id="fileupload">
                                                        <input type="file" id="cv" name="curriculum">
                                                        <span class="filename">Sube tu Curriculum aquí</span> 
                                                     <span class="action">Buscar</span> 
                                                </div>
                                            </div>
                                        @endif
                                        <div class="mt-38">
                                            <input type="submit" class="btn btn-info mb-15 w-25" id="guardar" name="guardar" value="Guardar">
                                        </div>
                                    </div>
                                </form>
                                <form action="{{ url('/perfil')}}">
                                    <input type="submit" onclick="location.href='1.html';href="{{ url('/perfil')}}" class="btn btn-info mb-15 w-25" value="Atras">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Single Job Post Area-->
               @stop