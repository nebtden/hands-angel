@extends('layouts.app')



@section('content')
    @include('layouts.banner')
    <section class="flat-row page-profile bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="flat-user profile">
                        <a href="page-user.html" class="edit" title="">Back to profile <i class="fa fa-backward"></i></a>
                        <ul class="info">
                            <li><a href="page-profile.html#" title=""><i class="fa fa-user"></i>BASIC INFOMATION</a>
                            </li>
                            <li><a href="page-profile.html#" title=""><i class="fa fa-link"></i>ON THE WEB</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="flat-tabs style2" data-effect="fadeIn">
                        <form method="post" action="{{ url('user/profile') }}" class="form-profile">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <ul class="menu-tab clearfix">
                            <li class="active"><a href="page-profile.html#"><i class="ion-navicon-round"></i>(3)
                                    Listings</a></li>
                            <li class=""><a href="page-profile.html#"><i class="ion-chatbubbles"></i>(3) Reviews</a>
                            </li>
                        </ul><!-- /.menu-tab -->
                        <div class="content-tab listing-user profile">
                            <div class="content-inner active">
                                <div class="basic-info"><h5>Basic Infomation</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="upload-img">
                                                <div    class="dropzone" id="my-awesome-dropzone">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">

                                                <p class="input-info"><label>Your name*</label>

                                                    <input type="text" name="name" id="name" value="{{$user->name}}"></p>
                                                <p class="input-info">
                                                    <label>Your Phone Numbers*</label>
                                                    <input type="text" name="phone" id="phone" value="{{$user->mobile}}"></p>
                                                <p class="input-info">
                                                    <label>Your Phone Numbers*</label>
                                                    <input type="text" name="email" id="email">
                                                </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="on-web">
                                    <div class="row">
                                        <div class="col-md-4"><h5>On the web</h5></div>
                                        <div class="col-md-8">
                                            <ul class="add-section">
                                                <li class="twitter">
                                                    <i class="fa fa-twitter-square twitter"></i>
                                                    <span>Twitter</span>
                                                    <input type="url" name="twitter" value="{{$user->twitter}}">

                                                    <i class="fa fa-minus-circle float-right"></i>
                                                </li>
                                                <li class="face">
                                                    <i class="fa fa-facebook-square face"></i>
                                                    <span>Facebook</span>
                                                    <input type="url" name="facebook" value="{{$user->facebook}}">

                                                    <i class="fa fa-minus-circle float-right"></i>
                                                </li>
                                                <li class="weixin">
                                                    <i class="fa fa-weixin weixin"></i>
                                                    <span>Wechat</span>
                                                    <input type="text" name="twitter" value="{{$user->wechat}}">
                                                    <i class="fa fa-minus-circle float-right"></i>
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
        url: "{{ url('upload') }}",
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
            obj = JSON.parse(response);
            alert(obj.filename); // <---- here is your filename
        }
    });
</script>
@stop
