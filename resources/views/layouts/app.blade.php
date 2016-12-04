<!DOCTYPE html>
<html lang="en">
<head>
{{--            FOR BACKGROUD IMAGE             --}}
    <style>
        /*body {*/
            /*background-image: url("https://cdn1.tnwcdn.com/wp-content/blogs.dir/1/files/2015/04/colortheory.jpg");*/

        /*}*/
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    {{--<link rel="icon" href="http://www.robweber.co.uk/images/r_favicon_black.jpg">--}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel =<?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body >
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                        {{--{{ config('app.name', 'Laravel') }}--}}
                    {{--</a>--}}
                <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        RELIANCE
                    </a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                       @if(Auth::user())
                        &nbsp;<li><a href="{{ url('users/') }}">USER</a></li>
                        &nbsp;<li><a href="{{ url('pages/') }}">PAGE</a></li>
                            <li><a href="{{ url('access/') }}">Access Rights</a></li>
                            <li><a href="{{ url('party/') }}">Party</a></li>
                            <li><a href="{{ url('salesmen/') }}">Salesmen</a></li>
                            <li><a href="{{ url('stock/') }}">Stock</a></li>
                            <li><a href="{{ url('order/') }}">Order</a></li>
                            <li><a href="{{ url('payment/') }}">Payment</a></li>
                        @endif
                        {{--@if(Auth::user())--}}
                        {{--&nbsp;<li><a href="{{ url('users/') }}">USER</a></li>--}}
                        {{--&nbsp;<li><a href="{{ url('pages/') }}">PAGE</a></li>--}}
                        {{--@endif--}}

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>





        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
