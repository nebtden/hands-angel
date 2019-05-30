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
                        <form method="post" action="{{ url('user/profile') }}" class="form-profile">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <ul class="menu-tab clearfix">

                        </ul><!-- /.menu-tab -->
                        <div class="content-tab listing-user profile" >
                            <div class="content-inner active" >
                                <div class="basic-info" id="basic" name="basic">
                                    <h5>基本信息</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="upload-img">

                                                <div action="{{ url('upload') }}" class="dropzone" id="my-awesome-dropzone">
                                                    <input type="hidden" name="head" id="head" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">


                                                <p class="input-info"><label>个人简介*</label>
                                                    <textarea  name="introduction" >{{$user->introduction}}</textarea>
                                                </p>
                                                <p class="input-info"><label>要求*</label>
                                                    <textarea  name="require" >{{$user->require}}</textarea>
                                                </p>
                                                <p class="input-info">
                                                    <label>性别(会有管理员验证，一旦选择，即无法更改！)*</label>
                                                    <select type="" name="sex" @if($user->sex>0) disabled @endif>
                                                        <option value="1" @if($user->sex==1) selected   @endif>男</option>
                                                        <option value="2" @if($user->sex==2) selected   @endif>女</option>
                                                    </select>
                                                </p>
                                                <p class="input-info">
                                                    <label>能接受的污污*</label>
                                                    <br>
                                                    <label><input name="types[]" type="checkbox" value="1" @if(in_array(1,$types))checked @endif />文爱 </label>
                                                    <label><input name="types[]" type="checkbox" value="3" @if(in_array(3,$types))checked @endif />视频 </label>
                                                    <label><input name="types[]" type="checkbox" value="5" @if(in_array(5,$types))checked @endif />其他 </label>

                                                </p>
                                               <br>

                                                <p class="input-info">
                                                    <label>您的邀请链接(邀请用户成功并验证通过，可获取一定管理员权限)</label>
                                                    <input type="url" name="url" id="url" value="{{env('APP_URL').'?invitation='.$user->id}}"  disabled>
                                                </p>
                                        </div>
                                        <div class="col-md-12">

                                            <div class="add-images">
                                                <label class="nhan">相册(可上传自己生活照！)</label>
                                                <div action="{{ url('upload') }}" class="dropzone" id="image">
                                                    <input type="hidden" name="images" id="images" value="{{$user->images}}">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="on-web" id="web" name="#web">
                                    <div class="row">
                                        <div class="col-md-4"><h5>其他信息</h5></div>
                                        <div class="col-md-8">
                                            <ul class="add-section">
                                                <li class="weixin">
                                                    <i class="fab fa-weixin weixin"></i>
                                                    <span>微信</span>
                                                    <input type="text" name="wechat" value="{{$user->wechat}}">
                                                </li>
                                                <li class="qq">
                                                    <i class="fab fa-qq qq"></i>
                                                    <span>QQ</span>
                                                    <input type="text" name="qq" value="{{$user->qq}}">
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="update-button text-center">
                                    <button type="submit" class="flat-button"  > 更新
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

            if("{{$user->head_img}}"){
                var mockFile = { name: "head.jpg", size: 12345, type: 'image/jpeg' };
                this.options.addedfile.call(this, mockFile);
                this.options.thumbnail.call(this, mockFile, "{{$user->head_img}}");
            }

            mockFile.previewElement.classList.add('dz-success');
            mockFile.previewElement.classList.add('dz-complete');
        },
        success: function( file, response ){
            $('#head').val( response);
        }
    });
</script>

    <script type="text/javascript">
        // Dropzone.options.myAwesomeDropzone = false;
        // Dropzone.autoDiscover = false;
        $("#image").dropzone({
            url: "{{ url('upload') }}",
            // addRemoveLinks : true,
            maxFilesize: 5,
            dictDefaultMessage: ' ',
            uploadMultiple:true,
            addRemoveLinks: true,
            dictResponseError: 'Error uploading file!',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            success: function( file, response ){
                console.log(response);
                var val = $('#images').val();
                if (val) {
                    $('#images').val(val + ',' +response);
                } else {
                    $('#images').val( response);
                }
            },
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
            removedfile: function(file) {
                file.previewElement.remove();
                var id = file.name;
                var val = $('#images').val();
                val=val.replace(id,"");
                $('#images').val(val);

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
