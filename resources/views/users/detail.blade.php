@extends('layouts.app')



@section('content')
    @include('layouts.banner')
    <section class="flat-row page-profile bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="flat-user profile">
                        <ul class="info">
                            <li>
                                <a href="#basic" title=""><i class="fa fa-user"></i>BASIC INFOMATION</a>
                            </li>
                            <li>
                                <a href="#web" title=""><i class="fa fa-link"></i>ON THE WEB</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="flat-tabs style2" data-effect="fadeIn">

                            <ul class="menu-tab clearfix">

                            </ul><!-- /.menu-tab -->
                            <div class="content-tab listing-user profile" >
                                <div class="content-inner active" >
                                    <div class="basic-info" id="basic" name="basic">
                                        <h5>Basic Infomation</h5>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="upload-img">
                                                    <img src="{{$user->head_img}}">
                                                    <div action="{{ url('upload') }}" class="dropzone" id="my-awesome-dropzone">
                                                        <input type="hidden" name="head" id="head" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">

                                                <p class="input-info"><label>Your name*</label>
                                                    <input type="text" name="name" id="name" value="{{$user->name}}" required disabled>
                                                </p>
                                                <p class="input-info"><label>Self-introduction*</label>
                                                    <textarea  name="introduction" >{{$user->introduction}}</textarea>
                                                </p>
                                                <p class="input-info">
                                                    <label>Your Gender*</label>
                                                    <select type="" name="sex" @if($user->sex>0) disabled @endif>
                                                        <option value="1" @if($user->sex==1) selected   @endif>Male</option>
                                                        <option value="2" @if($user->sex==2) selected   @endif>Female</option>
                                                    </select>
                                                </p>
                                                <p class="input-info">
                                                    <label>Your Country*</label>


                                                </p>
                                                <p class="input-info">
                                                    <label>Your Invitation Url</label>
                                                    <input type="url" name="url" id="url" value="{{env('APP_URL').'?invitation='.$user->id}}"  disabled>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="on-web" id="web" name="#web">
                                        <div class="row">
                                            <div class="col-md-4"><h5>On the web</h5></div>
                                            <div class="col-md-8">
                                                <ul class="add-section">
                                                    <li class="twitter">
                                                        <i class="fab fa-twitter-square twitter"></i>
                                                        <span>Twitter</span>
                                                        <input type="url" name="twitter" value="{{$user->twitter}}">


                                                    </li>
                                                    <li class="face">
                                                        <i class="fab fa-facebook-square face"></i>
                                                        <span>Facebook</span>
                                                        <input type="url" name="facebook" value="{{$user->facebook}}">


                                                    </li>
                                                    <li class="weixin">
                                                        <i class="fab fa-weixin weixin"></i>
                                                        <span>Wechat</span>
                                                        <input type="text" name="wechat" value="{{$user->wechat}}">

                                                    </li>

                                                    <li class="line">
                                                        <i class="fab fa-line line"></i>
                                                        <span>Line</span>
                                                        <input type="text" name="line" value="{{$user->line}}">

                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="update-button text-center">
                                        <button type="submit" class="flat-button"  >Update
                                            Profile
                                        </button>
                                    </div>
                                </div>

                            </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('javascript')
    <script src="/javascript/dropzone.js"></script>
    <link rel="stylesheet" type="text/css" href="/stylesheets/dropzone.css"><!-- Animation Style -->

    <style>
        .basic-info select{
            background-color: #FFF;
            -webkit-box-shadow: 1px 2px 5px 0px rgba(0, 0, 0, 0.1);
            box-shadow: 1px 2px 5px 0px rgba(0, 0, 0, 0.1);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            color: #C3C3C3;
        }
    </style>
@stop
