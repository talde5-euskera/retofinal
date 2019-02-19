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
                    <h2 class="uppercase">Profesores</h2>
                    <div class="separator mt-35 mb-77">
                        <span><img src="{{ asset('images/icons/1.png')}}" alt=""></span>
                    </div>
                </div>
            </div>

            <form action="#" method="post" class="col-md-offset-6 justify-content-center">
                    <div class="form-container fix orange-bg mt-125">
                        <div class="box-select">
                            <label>Filtrar por nombre</label>
                            <div class="form-box col-8 fix">
                                <input type="text" id="name" name="user_name" placeholder="Introduce el nombre" required>
                            </div>
                        </div>
                    </div>
                    <!-- HASTA AQUI -->
                </form> 

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="job-post-container fix mb-70">
                    <!-- LISTA PROFESORES -->


                @foreach($profesores as $profesor) 

                    <div class="single-job-post fix">
                        <div class="job-title col-3 pl-30">
                              <span class="pull-left block mtb-17">
                                    <a href="#"><img src= "{{ asset($profesor->foto) }} "width="72" alt="noFoto"></a>
                                </span>
                            <div class="fix pl-30 mt-29">
                                <h4 class="mb-5">{{$profesor->nombreapellidos}}</h4>
                            </div>
                        </div>
                        <div class="address col-3 pl-100">
                            <span class="mtb-30 block">{{$profesor->departamento}}</span>
                            @if($profesor->baja == 0)
                                <span class="mtb-30 block" style="color:green"> Activo </span>
                            @else
                                <span class="mtb-30 block" style="color:red"> No activo </span>
                            @endif
                        </div>
                        <div class="keyword col-4 pl-20 pt-39">
                            <a href="{{ url('/profesor/show/'.$profesor->id )}}" class="button mr-10">&#9997; Detalles</a>
                            @if($profesor->baja == 0)
                                <a href="{{url('/profesor/desactivar/'.$profesor->id)}}" class="button mr-10">Desactivar</a>
                            @else
                                <a href="{{url('/profesor/activar/'.$profesor->id)}}" class="button mr-10">
                                Activar</a>
                            @endif
                            <a href="{{url('/profesor/eliminar/'.$profesor->id)}}" class="button">&#x2717; Eliminar</a>
                        </div>
                    </div>
           
             @endforeach  
                 <!-- FIN LISTA PROFESORES -->
                         
                </div>
                <div class="text-center">
                    <a href="{{ url('/profesor/create')}}" class="button large-button">Añadir profesor</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Candidates Area -->
     @stop