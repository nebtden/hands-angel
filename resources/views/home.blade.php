@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center" style="margin: 26px 0;font-size: 1.3rem;">
                        <div class="sub-title" style="color:indianred">
                            此网站视频免费向大众开放，但也可以注册享受更多服务。
                            祝大家玩得开心！！
                        </div>
                    </div>
                </div>
            </div>
        </div>

    {{--@include('home.slider')--}}
    {{--@include('home.categories')--}}
    {{--@include('home.video')--}}
    @include('home.most')

    {{--@include('home.download')--}}
    {{--@include('home.news')--}}


@endsection

@section('css')
    @parent
    <link rel="stylesheet" type="text/css" href="/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/stylesheets/driveway.css">
@endsection
