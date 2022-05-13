@extends('layouts.app')
@section('title','About Us')
@section('content')  
 <!--================================================SCRIPT=========================================================-->
 <style> 
                div.fr{
                    display:none;
                }
                div.du{
                    display:none;
                }
                div.gr{
                    display:none;
                }
                div.ar{
                    display:none;
                }
                div.en{
                    display:block;
                }
            </style>			
            <script>
                function Showlanguage(str) {
                    //document.getElementById("demo").innerHTML = "Hello World "+str;
                    var en = document.getElementById("english");
                    var ar = document.getElementById("arabic");
                    var fr = document.getElementById("French");
                    var gr = document.getElementById("Germany");
                    var du = document.getElementById("Dutch");
                        if (str == "Ar") {
                            ar.style.display = "block";
                            en.style.display = "none";
                            fr.style.display = "none";
                            gr.style.display = "none";
                            du.style.display = "none";
                        }
                        if (str == "En") {
                            ar.style.display = "none";
                            en.style.display = "block";
                            fr.style.display = "none";
                            gr.style.display = "none";
                            du.style.display = "none";

                        }
                        if (str == "Fr") {
                            ar.style.display = "none";
                            en.style.display = "none";
                            fr.style.display = "block";
                            gr.style.display = "none";
                            du.style.display = "none";
                        }

                        if (str == "Gr") {
                            ar.style.display = "none";
                            en.style.display = "none";
                            fr.style.display = "none";
                            gr.style.display = "block";
                            du.style.display = "none";
                        }
                        if (str == "Du") {
                            ar.style.display = "none";
                            en.style.display = "none";
                            fr.style.display = "none";
                            gr.style.display = "none";
                            du.style.display = "block";
                        }
                        
                }
            </script>

<!-------------------------------------------------------------------------------------------->
 <!--================================================English=======================================================-->
    <div class ="en" id="english" align ="left" dir='ltr'>
        <div class="card"> 
            <div class="card-body">
                <nav class="navbar navbar-expand-md navbar-light" style="background-color:white">
                    <a href="/"  class="navbar-brand"><img src="/images/logo.PNG"   width="200" height="90" sizes="(max-width: 120px) 100vw, 120px" ></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-screwdriver me-2"></i>Products </a>
                                <ul class="dropdown-menu">
                                    @foreach($data as $row)  
                                    <li><a href="/show_details/{{ $row-> id }}" class="dropdown-item" >{{$row->pro_name_EN}}</a></li>
                                    @endforeach 
                                </ul>
                            <li class="nav-item"> <a class="nav-link" href="/about-us"><i class="fas fa-feather-alt me-2"></i></i>About US</a></li>
                            <li class="nav-item"> <a class="nav-link" href="/contact-us"><i class='fas fa-phone me-2'></i>Contact US</a></li>
                            <li class="nav-item dropdown"> 
                                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-screwdriver me-2"></i>Language </a>
                                <ul class="dropdown-menu">
                            <li align="center"  > <a id ="Ar" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Ar</a></li>
                            <li align="center"  > <a id ="En" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >En</a></li>
                            <li align="center"  > <a id ="Fr" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Fr</a></li>
                            <li align="center"  > <a id ="Gr" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Gr</a></li>
                            <li align="center"  > <a id ="Du" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Du</a></li>
                        </ul>
                            </li>
                            @if(!auth()->user()==null)
                                        @if(auth()->user()->isAdmin())
                            <li class="nav-item"> <a class="nav-link" href="http://127.0.0.1:8000/admin"><i class="fas fa-feather-alt me-2"></i></i>setting</a></li>
                            @endif 
                                    @endif
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                    @endif
                                    
                                @else
                                    <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"	onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div> 
                                    </li>				
                            @endguest
                        </ul>
                        
                    </div>
                </nav>
            </div>	
        </div>
        <!--the body of th about us page-->
        <div class="container-fluid" style="padding: 50px;">
            <div class="container" style="font-family: Arial, Helvetica, sans-serif ; position: relative; border-top: 10px rgb(9, 2, 17) solid;">
                <div class="jumbotron" style="padding: 12px; text-align: center;">
                    <p><h1> <b>About Us : </b> </h1>       </p>  
                    <center>  <hr style="width:40%;text-align:center;background-color: aqua; height:5px;">  </center>  
                    <h2><p> <I><B> YA_HALA CO.</B></I> </p></h2> 
                    <div class="tab-content pt-3">
                        <div class="tab-pane fade show active" id="primaryhome" >
                            @foreach($about as $row)
                                <label> {{$row->about_EN}}   </label>
                            @endforeach
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
 <!--================================================Arabic=======================================================-->
    <div class ="ar" id="arabic" align ="right" dir='rtl'>
        <div class="card"> 
            <div class="card-body">
                <nav class="navbar navbar-expand-md navbar-light" style="background-color:white">
                    <a href="/"  class="navbar-brand"><img src="/images/logo.PNG"   width="200" height="90" sizes="(max-width: 120px) 100vw, 120px" ></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-screwdriver me-2"></i>المنتجات </a>
                                <ul class="dropdown-menu">
                                    @foreach($data as $row)  
                                    <li><a href="/show_details/{{ $row-> id}}" class="dropdown-item" >{{$row->pro_name_AR}}</a></li>
                                    @endforeach 
                                </ul>
                            <li class="nav-item"> <a class="nav-link" href="/about-us"><i class="fas fa-feather-alt me-2"></i></i>من نحن</a></li>
                            <li class="nav-item"> <a class="nav-link" href="/contact-us"><i class='fas fa-phone me-2'></i>اتصل بنا</a></li>
                            <li class="nav-item dropdown"> 
                                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-screwdriver me-2"></i>اللغة</a>
                                <ul class="dropdown-menu">
                            <li align="center"  > <a id ="Ar" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Ar</a></li>
                            <li align="center"  > <a id ="En" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >En</a></li>
                            <li align="center"  > <a id ="Fr" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Fr</a></li>
                            <li align="center"  > <a id ="Gr" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Gr</a></li>
                            <li align="center"  > <a id ="Du" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Du</a></li>
                        </ul>
                            </li>
                            @if(!auth()->user()==null)
                                        @if(auth()->user()->isAdmin())
                            <li class="nav-item"> <a class="nav-link" href="http://127.0.0.1:8000/admin"><i class="fas fa-feather-alt me-2"></i></i>الإعدادات</a></li>
                            @endif 
                                    @endif
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                    @endif
                                    
                                @else
                                    <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>مسؤول</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"	onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div> 
                                    </li>				
                            @endguest
                        </ul>
                        
                    </div>
                </nav>
            </div>	
        </div>
        <!--the body of th about us page-->
        <div class="container-fluid" style="padding: 50px;">
            <div class="container" style="font-family: Arial, Helvetica, sans-serif ; position: relative; border-top: 10px rgb(9, 2, 17) solid;">
                <div class="jumbotron" style="padding: 12px; text-align: center;">
                    <p><h1> <b>من نحن: </b> </h1>       </p>  
                    <center>  <hr style="width:40%;text-align:center;background-color: aqua; height:5px;">  </center>  
                    <h2><p> <I><B> شركة يا هلا.</B></I> </p></h2> 
                    <div class="tab-content pt-3">
                        <div class="tab-pane fade show active" id="primaryhome" >
                            @foreach($about as $row)
                                <label> {{$row->about_AR}}   </label>
                            @endforeach
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
 <!--================================================French=======================================================-->
     <div class ="fr" id="French" align ="right" dir='ltr'>
        <div class="card"> 
            <div class="card-body">
                <nav class="navbar navbar-expand-md navbar-light" style="background-color:white">
                    <a href="/"  class="navbar-brand"><img src="/images/logo.PNG"   width="200" height="90" sizes="(max-width: 120px) 100vw, 120px" ></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            

                    
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-screwdriver me-2"></i>Des produits </a>
                                <ul class="dropdown-menu">
                                    @foreach($data as $row)  
                                    <li><a href="/show_details/{{ $row-> id }}" class="dropdown-item" >{{$row->pro_name_FR}}</a></li>
                                    @endforeach 
                                </ul>
                            <li class="nav-item"> <a class="nav-link" href="/about-us"><i class="fas fa-feather-alt me-2"></i></i>a propos de nous </a></li>
                            <li class="nav-item"> <a class="nav-link" href="/contact-us"><i class='fas fa-phone me-2'></i>contactez nous </a></li>
                            <li class="nav-item dropdown"> 
                                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-screwdriver me-2"></i>Langue </a>
                                <ul class="dropdown-menu">
                            <li align="center"  > <a id ="Ar" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Ar</a></li>
                            <li align="center"  > <a id ="En" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >En</a></li>
                            <li align="center"  > <a id ="Fr" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Fr</a></li>
                            <li align="center"  > <a id ="Gr" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Gr</a></li>
                            <li align="center"  > <a id ="Du" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Du</a></li>
                        </ul>
                            </li>
                            @if(!auth()->user()==null)
                                        @if(auth()->user()->isAdmin())
                            <li class="nav-item"> <a class="nav-link" href="http://127.0.0.1:8000/admin"><i class="fas fa-feather-alt me-2"></i></i>réglages</a></li>
                            @endif 
                                    @endif
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                    @endif
                                    
                                @else
                                    <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"	onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div> 
                                    </li>				
                            @endguest
                        </ul>
                        
                    </div>
                </nav>
            </div>	
        </div>
        <!--the body of th about us page-->
        <div class="container-fluid" style="padding: 50px;">
            <div class="container" style="font-family: Arial, Helvetica, sans-serif ; position: relative; border-top: 10px rgb(9, 2, 17) solid;">
                <div class="jumbotron" style="padding: 12px; text-align: center;">
                    <p><h1> <b>About Us : </b> </h1>       </p>  
                    <center>  <hr style="width:40%;text-align:center;background-color: aqua; height:5px;">  </center>  
                    <h2><p> <I><B> YA_HALA CO.</B></I> </p></h2> 
                    <div class="tab-content pt-3">
                        <div class="tab-pane fade show active" id="primaryhome" >
                            @foreach($about as $row)
                                <label> {{$row->about_FR}}   </label>
                            @endforeach
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
     <!--================================================German=======================================================-->
     <div class ="gr" id="Germany" align ="left" dir='ltr'>
        <div class="card"> 
            <div class="card-body">
                <nav class="navbar navbar-expand-md navbar-light" style="background-color:white">
                    <a href="/"  class="navbar-brand"><img src="/images/logo.PNG"   width="200" height="90" sizes="(max-width: 120px) 100vw, 120px" ></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            

                    
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-screwdriver me-2"></i>Produkte</a>
                                <ul class="dropdown-menu">
                                    @foreach($data as $row)  
                                    <li><a href="/show_details/{{ $row-> id }}" class="dropdown-item" >{{$row->pro_name_GR}}</a></li>
                                    @endforeach 
                                </ul>
                            <li class="nav-item"> <a class="nav-link" href="/about-us"><i class="fas fa-feather-alt me-2"></i></i>Über uns</a></li>
                            <li class="nav-item"> <a class="nav-link" href="/contact-us"><i class='fas fa-phone me-2'></i>Kontaktiere uns</a></li>
                            <li class="nav-item dropdown"> 
                                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-screwdriver me-2"></i>Sprache</a>
                                <ul class="dropdown-menu">
                            <li align="center"  > <a id ="Ar" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Ar</a></li>
                            <li align="center"  > <a id ="En" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >En</a></li>
                            <li align="center"  > <a id ="Fr" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Fr</a></li>
                            <li align="center"  > <a id ="Gr" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Gr</a></li>
                            <li align="center"  > <a id ="Du" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Du</a></li>
                        </ul>
                            </li>
                            @if(!auth()->user()==null)
                                        @if(auth()->user()->isAdmin())
                            <li class="nav-item"> <a class="nav-link" href="http://127.0.0.1:8000/admin"><i class="fas fa-feather-alt me-2"></i></i>Einstellung</a></li>
                            @endif 
                                    @endif
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                    @endif
                                    
                                @else
                                    <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"	onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div> 
                                    </li>				
                            @endguest
                        </ul>
                        
                    </div>
                </nav>
            </div>	
        </div>
        <!--the body of th about us page-->
        <div class="container-fluid" style="padding: 50px;">
            <div class="container" style="font-family: Arial, Helvetica, sans-serif ; position: relative; border-top: 10px rgb(9, 2, 17) solid;">
                <div class="jumbotron" style="padding: 12px; text-align: center;">
                    <p><h1> <b>About Us : </b> </h1>       </p>  
                    <center>  <hr style="width:40%;text-align:center;background-color: aqua; height:5px;">  </center>  
                    <h2><p> <I><B> YA_HALA CO.</B></I> </p></h2> 
                    <div class="tab-content pt-3">
                        <div class="tab-pane fade show active" id="primaryhome" >
                            @foreach($about as $row)
                                <label> {{$row->about_GR}}   </label>
                            @endforeach
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
     <!--================================================Dutch=======================================================-->
     <div class ="du" id="Dutch" align ="left" dir='ltr'>
        <div class="card"> 
            <div class="card-body">
                <nav class="navbar navbar-expand-md navbar-light" style="background-color:white">
                    <a href="/"  class="navbar-brand"><img src="/images/logo.PNG"   width="200" height="90" sizes="(max-width: 120px) 100vw, 120px" ></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            

                    
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-screwdriver me-2"></i>Producten </a>
                                <ul class="dropdown-menu">
                                    @foreach($data as $row)  
                                    <li><a href="/show_details/{{ $row-> id }}" class="dropdown-item" >{{$row->pro_name_DU}}</a></li>
                                    @endforeach 
                                </ul>
                            <li class="nav-item"> <a class="nav-link" href="/about-us"><i class="fas fa-feather-alt me-2"></i></i>Over ons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="/contact-us"><i class='fas fa-phone me-2'></i>Neem contact met ons op</a></li>
                            <li class="nav-item dropdown"> 
                                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-screwdriver me-2"></i>Taal </a>
                                <ul class="dropdown-menu">
                            <li align="center"  > <a id ="Ar" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Ar</a></li>
                            <li align="center"  > <a id ="En" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >En</a></li>
                            <li align="center"  > <a id ="Fr" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Fr</a></li>
                            <li align="center"  > <a id ="Gr" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Gr</a></li>
                            <li align="center"  > <a id ="Du" class="dropdown-item" onclick="Showlanguage($(this).attr('id'))" >Du</a></li>
                        </ul>
                            </li>
                            @if(!auth()->user()==null)
                                        @if(auth()->user()->isAdmin())
                            <li class="nav-item"> <a class="nav-link" href="http://127.0.0.1:8000/admin"><i class="fas fa-feather-alt me-2"></i></i>instelling</a></li>
                            @endif 
                                    @endif
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                    @endif
                                    
                                @else
                                    <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"	onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div> 
                                    </li>				
                            @endguest
                        </ul>
                        
                    </div>
                </nav>
            </div>	
        </div>
        <!--the body of th about us page-->
        <div class="container-fluid" style="padding: 50px;">
            <div class="container" style="font-family: Arial, Helvetica, sans-serif ; position: relative; border-top: 10px rgb(9, 2, 17) solid;">
                <div class="jumbotron" style="padding: 12px; text-align: center;">
                    <p><h1> <b>Over ons : </b> </h1>       </p>  
                    <center>  <hr style="width:40%;text-align:center;background-color: aqua; height:5px;">  </center>  
                    <h2><p> <I><B> yahla bedrijf</B></I> </p></h2> 
                    <div class="tab-content pt-3">
                        <div class="tab-pane fade show active" id="primaryhome" >
                            @foreach($about as $row)
                                <label> {{$row->about_DU}}   </label>
                            @endforeach
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
@endsection