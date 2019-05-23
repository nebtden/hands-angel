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
                                <a href="#basic" title=""><i class="fa fa-user"></i>基本信息</a>
                            </li>
                            <li>
                                <a href="#web" title=""><i class="fa fa-link"></i>其他信息</a>
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
                                        <h5>基本信息</h5>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="upload-img">
                                                    <img src="{{$user->head_img}}">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <br>
                                                <h6>个人简介</h6>
                                                <p class="input-info">

                                                    {{$user->introduction}}
                                                </p>
                                                <br>
                                                <p class="input-info">
                                                    <h6>性别</h6>
                                                    @if($user->sex==1)  男  @endif
                                                    @if($user->sex==2)  女  @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="on-web" id="web" name="#web">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h5>其他信息</h5>
                                            </div>
                                            <div class="col-md-8">
                                                <ul class="add-section">

                                                    <li class="weixin">
                                                        <i class="fab fa-weixin weixin"></i>
                                                        <span>微信</span>
                                                        <input type="text" name="wechat" disabled value="{{$user->wechat}}">
                                                    </li>
                                                    <li class="qq">
                                                        <i class="fab fa-qq qq"></i>
                                                        <span>QQ</span>
                                                        <input type="text" name="qq" disabled value="{{$user->qq}}">
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
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
