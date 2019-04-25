@extends('layouts.app')

@section('content')
    @include('layouts.banner')
    <section class="main-content page-listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="listing-wrap">
                        <div class="content-listing">
                            <p style="margin: 28px 0 0;color: red;text-indent: 2em;"> <span></span>
                                   最近，有很多女生反应微信及QQ受骚扰情况较多，
                                频繁的加好友请求给大家带来了不便，
                                因此我们这边永久关闭微信、QQ等社交账号的显示,
                                只对管理员显示。
                               <br>
                               <span style="float: right">    ---- 中国区管理员</span>
                            </p>
                            <div class="list-tab">
                                <div class="flat-tabs" data-effect="fadeIn">
                                    <div class="content-tab">
                                        <div class="content-inner active">
                                            @foreach($users as $user)
                                                <div class="menu-food clearfix">
                                                    <div class="featured-food float-left">
                                                    <span class="effect">
                                                        @if($user->head_img)
                                                            <img src="{{$user->head_img}}" alt="" />
                                                            @else
                                                            <img src="/images/logo.png" alt="" />
                                                            @endif

                                                    </span>
                                                    </div>
                                                    <div class="content-food float-left">
                                                        <h5>Name: <a href="/users/{{ $user->id }}">{{$user->name}}</a> </h5>
                                                        <p>
                                                            <i class="fab fa-weixin weixin"></i><span>wechat：</span>
                                                            {{substr_replace($user->wechat,"****",5)}}
                                                        </p>
                                                        <p>{{$user->introduction}} </p>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('users.right')
            </div>
        </div>
    </section> @endsection
