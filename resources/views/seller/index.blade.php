<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ Seller::title() }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    {!! Admin::css() !!}
<!-- Theme style -->
    <link rel="stylesheet" href="http://test.hands.com/vendor/laravel-admin/AdminLTE/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="http://test.hands.com/vendor/laravel-admin/AdminLTE/plugins/iCheck/all.css">
    <link rel="stylesheet" href="http://test.hands.com/vendor/laravel-admin/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="{{ asset("/packages/admin/AdminLTE/dist/css/skins/skin-color.min.css") }}">
    <script src="{{ Admin::jQuery() }}"></script>

</head>

<body class="hold-transition {{config('seller.skin')}} skin-color ">
<div class="wrapper">

    @include('seller.partials.header')

    @include('seller.partials.sidebar')

    <div class="content-wrapper" id="pjax-container">
        @yield('content')
        {!! admin::script() !!}
    </div>

    @include('seller.partials.footer')

</div>

<script>
    function LA() {}
    LA.token = "{{ csrf_token() }}";
</script>

<!-- REQUIRED JS SCRIPTS -->
{!! Admin::js() !!}
<script src="http://test.hands.com/vendor/laravel-admin/AdminLTE/plugins/iCheck/icheck.min.js"></script>
<script src="http://test.hands.com/vendor/laravel-admin/AdminLTE/plugins/input-mask/jquery.inputmask.bundle.min.js"></script>
<script src="http://test.hands.com/vendor/laravel-admin/moment/min/moment-with-locales.min.js"></script>
<script src="http://test.hands.com/vendor/laravel-admin/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="http://test.hands.com/vendor/laravel-admin/AdminLTE/plugins/select2/select2.full.min.js"></script>
</body>
</html>
