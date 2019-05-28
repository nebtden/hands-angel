@extends('layouts.app')



@section('content')
    @include('layouts.banner')
    <div class="parallax" style="background-position: 50% 16px;padding: 20px 0 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="color: red">
                    <h6>审核员点评</h6>
                    <div class="row">
                        <div class="col-md-12" >
                            {{$user->review}}
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div>
        <!-- /.container -->
    </div>

    <section class="flat-row page-profile bg-theme" style="padding: 60px 0 10px;">
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
                                                    <span style="font-size: 1.1rem">性别</span>
                                                    @if($user->sex==0)  保密  @endif
                                                    @if($user->sex==1)  男  @endif
                                                    @if($user->sex==2)  女  @endif
                                                </p>
                                                <p class="input-info">
                                                    <label>能接受的污污*</label>
                                                    <br>
                                                    <label><input name="types" type="checkbox" value="1" @if(in_array(1,$types))checked @endif />文爱 </label>
                                                    <label><input name="types" type="checkbox" value="3" @if(in_array(3,$types))checked @endif />视频 </label>
                                                    <label><input name="types" type="checkbox" value="5" @if(in_array(5,$types))checked @endif />其他 </label>
                                                </p>
                                                <br>
                                                <div   id="image">
                                                    @foreach($images as $image)
                                                    <div class="dz-preview dz-complete dz-image-preview">
                                                        <div class="dz-image">
                                                            <img data-dz-thumbnail=""  src="{{$image->src}}">

                                                        </div>
                                                     </div>
                                                     @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
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

    </script>
    <script type="text/javascript">
        // Dropzone.options.myAwesomeDropzone = false;
        // Dropzone.autoDiscover = false;
        $("#image").dropzone({
            // addRemoveLinks : true,
            maxFilesize: 5,
            dictDefaultMessage: ' ',
            dictResponseError: 'Error uploading file!',
            init: function () {

                if("{{$images}}"){

                        @foreach($images as $image)
                    var mockFile = { name: "{{$image->id}}", size: 12345, type: 'image/jpeg' };

                    this.options.addedfile.call(this, mockFile);
                    this.options.thumbnail.call(this, mockFile, "{{$image->src}}");
                    // mockFile.previewElement.classList.add('dz-success');
                    mockFile.previewElement.classList.add('dz-complete');
                    // mockFile.previewElement.classList.add('dz-remove');
                    @endforeach
                }
            },

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
