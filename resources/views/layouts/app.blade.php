<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Saudia Directory</title>

    <span class="ticon"> <link rel="icon"  type="image/ico" href="<?php echo asset('img/logo1.svg')?>" /></span>
    


    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>">
    <!-- Google Fonts -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">    <!-- Simple line Icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/font-awesome.min.css')?>">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>">
</head>
<body>
    <div id="app">
        






 <!--============================= HEADER =============================-->
 <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
                <div class="row">
                    <div class="col-md-12">
                       <nav class="navbar navbar-expand-lg navbar-light">
                       <a class="navbar-brand" href="index.html"><img src="<?php echo asset('img/brand.png')?>">
                            Saudia <span class="logo">Directory</span>
                            </a>
                            <div>
                                <ul class="navbar-nav">
                                    
               
                                <li class="nav-item " id="temp">
                                    <p><img scr="<?php echo asset('img/sun.png')?>"><span>40c</span>
                                        <br>
                                        <span class="location">cairo</span>
                                        <br>
                                        <span class="date">20/10/2018/ 8:20 am</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-bars"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">


                                <li class="nav-item dropdown">
                                    <a class="dropdown-item " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-flag" ></i> language
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#"><img  src="<?php echo asset('img/png/arabic.png')?>">عربى</a>
                                        <a class="dropdown-item" href="#"><img  src="<?php echo asset('img/png/english.png')?>"></i>English</a>
                                    </div>
                                </li>
                                <li><input  class="form-control " placeholder="Search.."  type="text" id="search"></li>

                                <li> <a class="dropdown-item" href="#"><i class="fas fa-plus"></i>Add Activity</a></li>
                                <li> <a class="dropdown-item" href="#"><i class="fas fa-pencil"></i>Add artical</a></li>

                     <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li >
                                <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li >
                                @if (Route::has('register'))
                                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
            </div>
        </div>
    </div>









        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!--============================= FOOTER =============================-->
<footer class="main-block dark-bg">

<div class="container">
    <div class="row footer">

        <div class="col-md-3">
            <h2><i class="fas fa-thumbs-o-up"></i>lorem lorem lorem
                <i class="fas fa-caret-down fa-3x down-show"></i></h2>
            <ul>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>

            </ul>
        </div>
        <div class="col-md-3">
            <h2><i class="fas fa-tags"></i>lorem lorem lorem
                <i class="fas fa-caret-down fa-3x down-show"></i></h2>
            <ul>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>

            </ul>
        </div>
        <div class="col-md-3">
            <h2><i class="fas fa-bookmark"></i>lorem lorem lorem
                <i class="fas fa-caret-down fa-3x down-show"></i></h2>
            <ul>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>

            </ul>
        </div>
        <div class="col-md-3">
            <h2><i class="fas fa-info"></i>lorem lorem lorem
                <i class="fas fa-caret-down fa-3x down-show"></i></h2>
            <ul>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>
                <li><a href="#"><i class="fas fa-link"></i> lorem</a></li>

            </ul>
        </div>
    </div>
    <div class="container col-md-10 ">
        <div class="copyright">

            <ul>
                <li><a href="#"><i class="fas fa-paper-plane"></i>اعلن معنا عن</a><i class="fas fa-caret-left right-show"></i></li>
                <li><a href="#"><span class="fas fa-google"></span>Google</a></li>
                <li><a href="#"><span class="fas fa-facebook"></span>Facebook</a></li>
                <li><a href="#"><span class="fas fa-twitter"></span>Twitter</a></li>
                <li><a href="#"><span class="fas fa-instagram"></span>Instgram</a></li>
            </ul>
        </div>
        <hr>
    </div>
    <div class="container col-md-10 ">
        <div class="copyright1">

            <ul>

                <li><a href="#"><span class="fas fa-facebook"></span></a></li>
                <li><a href="#"><span class="fas fa-twitter"></span></a></li>
                <li><a href="#"><span class="fas fa-linkedin"></span></a></li>
                <li><a href="#"><span class="fas fa-instagram"></span></a></li>

                <li><a href="#"><span class="fas fa-google-plus"></span></a></li>
                <li><a href="#"><span class="fas fa-youtube"></span></a></li>
                <li><a href="#"><span class="fas fa-snapchat-ghost"></span></a></li>


            </ul>
        </div>

    </div>

    <div class="container col-md-10 ">
        <div class="copyright1">
            <p> جميع الحقوق محفوظه لــ </p>
        </div>
    </div>
</div>
</div>
</footer>
<!--//END FOOTER -->

<!-- jQuery, Bootstrap JS. -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo asset('js/jquery-3.2.1.min.js')?>"></script>
<script src="<?php echo asset('js/popper.min.js')?>"></script>
<script src="<?php echo asset('js/bootstrap.min.js')?>"></script>
<script src="<?php echo asset('js/wow.min.js')?>"></script>
<script src="<?php echo asset('js/style.js')?>"></script>
</body>
</html>
