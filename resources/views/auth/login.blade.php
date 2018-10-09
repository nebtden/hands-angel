<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> {{ trans('admin::lang.login') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset("/packages/admin/AdminLTE/bootstrap/css/bootstrap.min.css") }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("/packages/admin/font-awesome/css/font-awesome.min.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("/packages/admin/AdminLTE/dist/css/AdminLTE.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/packages/admin/AdminLTE/dist/css/skins/skin-color.min.css") }}">

    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset("/packages/admin/AdminLTE/plugins/iCheck/square/blue.css") }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page skin-color">
<div class="login-box">
    <div class="login-logo">
        <a href="/"><img src="/images/logo.png" width="120px" height="80px"></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">

        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
            <div class="form-group has-feedback {!! !$errors->has('username') ?: 'has-error' !!}">

                @if($errors->has('name'))
                    @foreach($errors->get('name') as $message)
                        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{$message}}</label></br>
                    @endforeach
                @endif

                <input type="input" class="form-control" placeholder="{{ trans('admin::lang.name') }}" name="name" value="{{ old('name') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback {!! !$errors->has('password') ?: 'has-error' !!}">

                @if($errors->has('password'))
                    @foreach($errors->get('password') as $message)
                        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{$message}}</label></br>
                    @endforeach
                @endif

                <input type="password" class="form-control" placeholder="{{ trans('admin::lang.password') }}" name="password" value="{{ old('username') }}">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback" >
                <select name="language" class="form-control" >
                    <option value="en">English</option>
                    <option value="zh_CN">汉语</option>

                </select>
                <span class="glyphicon glyphicon-book form-control-feedback"></span>
            </div>
            <div class="row">

                <!-- /.col -->
                <div class="col-md-12">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div style="width: auto;display: table;margin-left: auto;margin-right: auto;">
                        <button type="submit" class="btn btn-primary" style="">{{ trans('admin::lang.login') }}</button>

                    </div>
                    <a href="javascript:;" style="position:absolute;right:0px;top:3px;float: right" class=" " data-toggle="modal"  data-target=".bs-example-modal-sm"     >
                        FAQ
                    </a>
                    {{--<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">1111</button>--}}
                    {{--<a href="javascript:;" >支持kilimalll登陆</a>--}}

                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- Small modal -->
{{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>--}}

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">FAQ</h4>
            </div>
            <div class="modal-body">
                <p>支持Kilimall卖家账号登录，登录用户名是：国家代码_卖家用户名（e.g.：ke_UseName）</p>
                <p>国家代码：肯尼亚：ke，尼日利亚：ng，乌干达：ug</p>
                <hr>
                <p>Support Kilimall seller account login，Login name：Country code_Kilimall seller account（e.g.：ke_UseName）</p>
                <p>Country code：Kenya：ke，Nigeria：ng，Uganda：ug</p>
            </div>
        </div>
    </div>
</div>

<!-- jQuery 2.1.4 -->
<script src="{{ asset("/packages/admin/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js")}} "></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{ asset("/packages/admin/AdminLTE/bootstrap/js/bootstrap.min.js")}}"></script>
<!-- iCheck -->
<script src="{{ asset("/packages/admin/AdminLTE/plugins/iCheck/icheck.min.js")}}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>


<script>
    var View = {

        themes: [
            { image: '/images/seller/background/1.jpg', top: '20%' },
            { image: '/images/seller/background/2.jpg', right: '15%' },
            { image: '/images/seller/background/3.jpg', bottom: '10%' },
            { image: '/images/seller/background/4.jpg', left: '20%' },
            { image: '/images/seller/background/5.jpg', bottom: '15%' }
        ],

        init: function() {
            this.theme = this.themes[ parseInt( Math.random()*this.themes.length ) ];
            $(window).resize(function() { View.resize(false); });
            View.resize(true);
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        },

        resize: function(firstrun) {
            this.width = $(window).width();
            this.height = $(window).height();
            $('.login-page').width( this.width );
            $('.login-page').height( this.height );
            var box_width = $('.login-box').width();
            var box_height = $('.login-box').height();
            var box_left = this.width/2 - box_width/2;
            var box_top = this.height/2 - box_height/2;
            var premise = this.width>this.height && this.width>768;
            if(premise && this.theme.left) $('.login-box').css('left', this.theme.left);
            else if(premise && this.theme.right) $('.login-box').css('right', this.theme.right);
            else $('.login-box').css('left', box_left+'px')
            if(premise && this.theme.top) $('.login-box').css('top', this.theme.top);
            else if(premise && this.theme.bottom) $('.login-box').css('bottom', this.theme.bottom);
            else $('.login-box').css('top', box_top+'px')
            if(firstrun && this.theme.image) $('.login-page').css('background-image', 'url('+this.theme.image+')');
        },

    }

    $(function () { View.init(); });



</script>
<!-- Button trigger modal -->

</body>
</html>

