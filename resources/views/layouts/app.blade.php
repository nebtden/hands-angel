<!DOCTYPE html>
<head><!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <![endif]-->
    <title>{{ config('app.name') }} </title>
    @include('layouts.head')
</head>

<body class="header_sticky"><!-- Preloader -->
<section class="loading-overlay">
    <div class="Loading-Page"><h2 classbackground.js="loader">Loading</h2></div>
</section><!-- Boxed -->
<div class="boxed"><!-- Header -->
    @include('layouts.header')

    @yield('content')
    @include('layouts.footer')

    {{--@if()--}}
    {{--@includeWhen(\Illuminate\Support\Facades\Auth::user(), 'layouts.login')--}}
    @guest
    @include('layouts.login')
    @include('layouts.register')
    @endguest


    <!-- Go Top -->
    <a class="go-top effect-button"><i class="fa fa-angle-up"></i></a>
</div>
@include('layouts.javascript')
@yield('javascript')
@yield('css')
</body>
</html>
