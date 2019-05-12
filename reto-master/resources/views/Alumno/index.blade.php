@extends('layouts.layout')
@section('content')
<script>
  var msg = '{{Session::get('message')}}';
  var exist = '{{Session::has('message')}}';
  if(exist){
    alert(msg);
  }
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#filtro #vacio").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    $("#curso").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#filtro #vacio").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      }); 
    });

    url = "scripts/alumnos.php";
    //url = "$alumnos";

        $.ajax({
          type: "GET",
          data: data,
          url: url,
          success: function(data)
          {
            
          },
          error: function()
          {
            
          }
        });
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
                        <h4 class="text-left">Filtrar por nombre</h4>
                    </div>
                    <!--FIN FILTROS-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mb-35">
                        <input id="myInput" type="text" placeholder="Buscar alumno..">
                        <!-- <input id="curso" type="text" placeholder="Buscar curso.."> --> 
                        <a href="{{ url('/alumno/create')}}" class="button large-button">Añadir Alumno</a>
                    </div>
                    <div class="job-post-container fix mb-70">

             
                @foreach($alumnos as $alumno) 


                        <div id="filtro" class="single-job-post fix">
                            <div id="vacio">
                                <div class="job-title col-3 pl-30">
                                    
                                    <span class="pull-left block mtb-17">
                                        <a href="#"><img src= "{{ asset($alumno->foto) }} "width="72" alt="noFoto"></a>
                                    </span>
                                    <div class="fix pl-30 mt-29">
                                        <h4 class="mb-5"> {{$alumno->nombreapellidos}} </h4>
                                        <p class="mb-5"> {{$alumno->nombre}} </p>
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
                                    @if(session('admin') == "si")

                                        @if($alumno->baja == 0)
                                        <a href="{{url('/alumno/desactivar/'.$alumno->id)}}" class="button mr-10">Desactivar</a>
                                        @else
                                        <a href="{{url('/alumno/activar/'.$alumno->id)}}" class="button mr-10">
                                        Activar</a>
                                        @endif
                                        <a href="{{url('/alumno/eliminar/'.$alumno->id)}}" class="button">&#x2717; Eliminar</a>
                                    @endif
                                </div>
                            </div>
                        </div>
              @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Candidates Area -->
                
    @stop