@extends('layouts.layout')
    @section('content')
    @if($persona->baja == 1)
        <script>
        event.preventDefault();
        document.getElementById('logout-form').submit();
    </script>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

        @endif
                <!-- End of Header Area -->
                @if(session('rol') != "profesor")
                <script>
                	function cambiartamaño() {
                	   document.getElementById('divofertas').classList.remove("col-xs-4");
                	   document.getElementById('divperfil').classList.remove("col-xs-4");
                	   document.getElementById('divofertas').classList.add("col-xs-5");
                	   document.getElementById('divperfil').classList.add("col-xs-5");
                        document.getElementById('divvacio').classList.add("col-xs-2");
                	}
                	
                	 
                	

                </script>
                @endif
                <!--Start of Blog Area-->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="js/jquery/index.js"></script>
                <div class="blog-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center ">
                                    <div class="separator mt-35 mb-77">
                                        <span><img src="images/icons/1.png" alt=""></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                @if(session('rol') == "alumno")
                                    {{ session()->put('idlogin', $persona->id) }}
                                @else
                                
                                    {{ session()->put('idlogin', $persona->id) }}
                                    @if($persona->admin == 1)
                                        {{ session()->put('admin', 'si') }}
                                    @else
                                        {{ session()->put('admin', 'no') }}
                                    @endif
                                @endif
                                <div class="col-xs-4" id="divperfil">
                                    <div class="single-blog hover-effect">
                                        <div class="blog-image box-hover">
                                            <a id="opcion" href="{{ url('/perfil')  }}" class="block">
                                                @if(session('rol') == "alumno")
                                                    <img src="images/icons/perfil2.png" alt="">
                                                @else
                                                    <img src="images/icons/perfil.png" alt="">
                                                @endif
                                            </a>
                                        </div>
                                        <div class="blog-text">
                                            <h5 class="pt-28 mb-70 text-center"><a href="{{ url('/perfil')  }}">Mi perfil</a></h5>

                                        </div>
                                    </div>
                                </div>
                                <div class="" id="divvacio"></div>
                                <div class="col-xs-4" id="divofertas">
                                    <div class="single-blog">
                                        <div class="blog-image box-hover">
                                            <a href="{{ url('/oferta/index')  }}" class="block">
                                                @if(session('rol') == "alumno")
                                                    <img src="images/icons/ofertas2.png" id="ofertas" alt="">
                                                @else
                                                    <img src="images/icons/ofertas.png" id="ofertas" alt="">
                                                @endif
                                            </a>
                                        </div>
                                       <div class="blog-text">
                                            <h5 class="pt-28 mb-6 text-center"><a href="{{ url('/oferta/index')  }}">Mis ofertas</a></h5>
                                        </div>
                                    </div>
                                </div>
                                @if(session('rol') != "alumno")
                                <div class="col-xs-4 bgcolor" id="divalumnos">
                                    <div class="single-blog hover-effect ">
                                        <div class="blog-image box-hover">
                                            <a href="{{ url('/alumno/index')  }}" class="block">
                                                <img src="images/icons/alumnos.png" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-text">
                                            <h5 class="pt-28 mb-6 text-center"><a href="{{ url('/alumno/index')  }}">Mis alumnos</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Blog Area-->
                @stop