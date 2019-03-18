<!DOCTYPE html><!--[if IE 8 ]>
<html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US"
      lang="en-US"><![endif]--><!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head><!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]--><title>{{ config('app.name') }} </title>
    @include('layouts.head')
</head>

<body class="header_sticky"><!-- Preloader -->
<section class="loading-overlay">
    <div class="Loading-Page"><h2 class="loader">Loading</h2></div>
</section><!-- Boxed -->
<div class="boxed"><!-- Header -->
    @include('layouts.header')

    @yield('content')
    @include('layouts.footer')
    @include('layouts.login')
    @include('layouts.register')

    <!-- Go Top -->
    <a class="go-top effect-button"><i class="fa fa-angle-up"></i></a>
</div>
@include('layouts.javascript')
</body>
</html>
