    
    @extends('layouts.layout')
    @section('content')
              <script>
  var msg = '{{Session::get('message')}}';
  var exist = '{{Session::has('message')}}';
  if(exist){
    alert(msg);
  }
</script>
              
                <!-- CARRUSEL EMPIEZA-->
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                 <!-- Indicators -->
                 <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                 <!-- Slides -->
            <div class="carousel-inner">
                 <div class="item active">

                    <img src=" {{ asset('/images/carr1.jpg') }}" alt="noFoto" width="100%" >
                </div>
                <div class="item">
                    <img src=" {{ asset('/images/carr2.jpg') }}" alt="noFoto" width="100%" height="300px">
                </div>
                <div class="item">
                    <img src=" {{ asset('/images/carr3.jpg') }}" alt="noFoto" width="100%" height="300px">
                </div>
            </div>
                <!-- Controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
        <!-- CARRUSEL FIN
        -->
                <!--Posts ofertas-->

                <div class="job-post-area ptb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center ">
                                    <h2 class="uppercase">Nuevas Ofertas</h2>
                                    <div class="separator mt-35 mb-77">
                                        <span><img src="{{ asset('images/icons/1.png')}}" alt=""></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="job-post-container fix">

                            @foreach($ofertas as $oferta) 
                                    <!-- INICIO DE UNA OFERTA -->         
                                                
                                    <div class="single-job-post fix mb-20">
                                        <div class="job-title col-4 pl-30">
                                            
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">{{$oferta->titulo}}</h4>
                                                
                                                <span class="mtb-15 block">{{$oferta->empresa}}</span>
                                                 <span class="mtb-15 block">{{$oferta->localizacion}}</span>                                                
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">{{$oferta->descripcion}}</span>
                                        </div>
                                        <div class="col-2 pl-60 text-center pt-22">            
                                            <a href="{{ url('/oferta/show/'.$oferta->id )}}" class="button btn-orange">Detalles</a>
                                            @if(session('rol') != "alumno")
                                            <a href="{{ url('/oferta/apuntados/'.$oferta->id )}}" class="button btn-blue mt-10">Lista apuntados</a>
                                            <a href="{{url('/oferta/eliminar/'.$oferta->id)}}" class="button btn-red mt-10">&#x2717; Eliminar</a>
                                            @endif
                                        </div>
                                    </div>
                            @endforeach   
                                    <!-- FIN DE OTRA OFERTA -->
                                   
                                </div>
                            </div>
                            @if(session('rol') != "alumno")
                            <div class="text-center">
                                <a href="{{ url('/oferta/create')}}" class="button large-button">Crear oferta</a>
                            </div>
                            @endif
                        </div>

                    </div>

                </div>
                <!-- End of Job Post Area -->
    @stop