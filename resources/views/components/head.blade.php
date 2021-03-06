<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Title  -->
    <title>Extra watches</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('css/core-style.css')}}">

    <script>
    var BASE_URL = "{{asset('/')}}";
    
    var TOKEN = "{{csrf_token()}}";
    </script>

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="{{url('/')}}"><img src="{{asset('img/core-img/logo.jpg')}}" width="74" height="54" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                   @include('components.nav')
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="{{url('/search-watches')}}" method="get">
                        @csrf
                        <input type="search" name="search" id="headerSearch" placeholder="Search watches by name">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                @if(session()->has('user'))
                <div class="favourite-area">
                    <a href="{{url('/logout')}}"><img src="{{asset('img/core-img/heart.svg')}}" alt=""></a>
                </div>
                @endif
                @if(!session()->has('user'))
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="{{url('/welcome')}}"><img src="{{asset('img/core-img/user.svg')}}" alt=""></a>
                </div>
                @endif
                <!-- Cart Area -->
                <div class="cart-area cart">
                    <a href="" id="essenceCartBtn"><img src="{{asset('img/core-img/bag.svg')}}" alt=""> <span></span></a>
                </div>
            </div>

            </div>
    </header>
    <!-- ##### Header Area End ##### -->