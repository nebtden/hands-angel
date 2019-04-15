@extends('layouts.app')



@section('content')
    @include('layouts.banner')
    <section class="flat-row page-profile bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="flat-user profile">
                        <a href="/user/index" class="edit" title="">Back to profile <i class="fa fa-backward"></i></a>
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
                        <form method="post" action="{{ url('user/profile') }}" class="form-profile">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <ul class="menu-tab clearfix">

                        </ul><!-- /.menu-tab -->
                        <div class="content-tab listing-user profile" >
                            <div class="content-inner active" >
                                <div class="basic-info" id="basic" name="basic">
                                    <h5>Basic Infomation</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="upload-img">

                                                <div action="{{ url('upload') }}" class="dropzone" id="my-awesome-dropzone">
                                                    <input type="hidden" name="head" id="head" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">

                                                <p class="input-info"><label>Your name*</label>
                                                    <input type="text" name="name" id="name" value="{{$user->name}}" required>
                                                </p>
                                                <p class="input-info"><label>Self-introduction*</label>
                                                    <textarea  name="introduction" >{{$user->introduction}}</textarea>
                                                </p>
                                                <p class="input-info">
                                                    <label>Your Gender*</label>
                                                    <select type="" name="sex">
                                                        <option value="1" @if($user->sex==1) selected @endif>Male</option>
                                                        <option value="2" @if($user->sex==2) selected @endif>Female</option>
                                                    </select>
                                                </p>
                                                <p class="input-info">
                                                    <label>Your Country*</label>
                                                    <select type="" name="country_id" class="dropdown_sort">
                                                        @foreach ($countries as $key=>$country)
                                                            <option value="{{$country->id}}" @if($user->country_id==$country->id) selected @endif>{{$country->country_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    {{--<input type="text" name="email" id="email">--}}
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
                                                    <i class="fa fa-twitter-square twitter"></i>
                                                    <span>Twitter</span>
                                                    <input type="url" name="twitter" value="{{$user->twitter}}">


                                                </li>
                                                <li class="face">
                                                    <i class="fa fa-facebook-square face"></i>
                                                    <span>Facebook</span>
                                                    <input type="url" name="facebook" value="{{$user->facebook}}">


                                                </li>
                                                <li class="weixin">
                                                    <i class="fa fa-weixin weixin"></i>
                                                    <span>Wechat</span>
                                                    <input type="text" name="wechat" value="{{$user->wechat}}">

                                                </li>

                                                <li class="line">
                                                    <i class="fa fa-line line"></i>
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('javascript')
<script src="/javascript/dropzone.js"></script>
<link rel="stylesheet" type="text/css" href="/stylesheets/dropzone.css"><!-- Animation Style -->

<script type="text/javascript">
    Dropzone.options.myAwesomeDropzone = false;
    Dropzone.autoDiscover = false;
    $("#my-awesome-dropzone").dropzone({
        url: "{{ url('/upload/head') }}",
        addRemoveLinks : true,
        maxFilesize: 5,
        dictDefaultMessage: ' ',
        dictResponseError: 'Error uploading file!',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        init: function () {
            var mockFile = { name: "myimage.jpg", size: 12345, type: 'image/jpeg' };
            this.options.addedfile.call(this, mockFile);
            this.options.thumbnail.call(this, mockFile, "{{$user->head_img}}");
            mockFile.previewElement.classList.add('dz-success');
            mockFile.previewElement.classList.add('dz-complete');
        },
        success: function( file, response ){
            $('#head').val( response);
        }
    });
</script>
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
