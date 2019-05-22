@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <div class="sub-title" style="color:indianred">
                            注意，此网站视频免费向大众开放，但也可以注册享受更多服务。
                            更多污污的小哥哥小姐姐在等着你哦

                        </div>
                    </div>
                </div>
            </div>
        </div>

    {{--@include('home.slider')--}}
    {{--@include('home.categories')--}}
    @include('home.video')
    @include('home.most')

    {{--@include('home.download')--}}
    {{--@include('home.news')--}}


@endsection

@section('css')
    @parent
    <link rel="stylesheet" type="text/css" href="/revolution/css/layers.css">
@endsection
