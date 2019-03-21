@extends('layouts.app')

@section('content')
    @include('layouts.banner')
    <section class="flat-row page-addlisting">
        <div class="container">
            <form method="post" action="{{ url('user/add-task') }}" class="filter-form form-addlist">
            <div class="add-filter">

                <div class="row">
                    <div class="col-lg-2"><h5 class="title-list">Basic Listing</h5></div>
                    <div class="col-lg-10 widget-form">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <p class="input-info">
                                <label class="nhan">Listing Title*</label>
                                <input type="text" name="title" id="title" value="{{ $task->title??'' }}">
                            </p>
                            <p class="input-info">
                                <label class="nhan">Description*</label>
                                <textarea class="" tabindex="4" name="comment">
                                    {{ $task->comment??'' }}
                                </textarea>
                            </p>
                            <p class="input-info icon">
                                <label class="nhan">Categories*</label>
                                <select class="dropdown_sort" name="categories">
                                    <option value="">All Categories</option>
                                    <option value="">Hotel &amp; travel</option>
                                    <option value="">Real Estate</option>
                                    <option value="">Restaurant</option>
                                    <option value="">Healthy &amp; Fitness</option>
                                    <option value="">Food and coffee</option>
                                    <option value="">Drinks</option>
                                </select>
                                <i class="fa fa-angle-down"></i>
                            </p>


                        <div class="add-images">
                            <label class="nhan">Gallery</label>
                            <div action="{{ url('upload') }}" class="dropzone" id="my-awesome-dropzone">
                                <input type="hidden" name="images" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-contact">
                <div class="row">
                    <div class="col-lg-2"><h5 class="title-list">Infomation</h5></div>
                    <div class="col-lg-10 profile"><label class="nhan">Contact</label>

                            <div class="col-lg-4"><p class="input-info"><input type="text" name="title"
                                                                               placeholder="Phone" required=""></p>
                            </div>
                            <div class="col-lg-4"><p class="input-info"><input type="email" name="title"
                                                                               placeholder="Email" required=""></p>
                            </div>
                            <div class="col-lg-4"><p class="input-info"><input type="text" name="title"
                                                                               placeholder="Website" required=""></p>
                            </div>

                        <ul class="add-section">
                            <li class="twitter"><i class="fa fa-twitter-square twitter"></i><span>Twitter</span><a
                                    href="https://twitter.com/" title="">https://twitter.com/</a><i
                                    class="fa fa-minus-circle float-right"></i></li>
                            <li class="face"><i class="fa fa-facebook-square face"></i><span>Facebook</span><a
                                    href="https://www.facebook.com/" title="">https://www.facebook.com/</a><i
                                    class="fa fa-minus-circle float-right"></i></li>
                            <li class="youtube"><i class="fa fa-youtube-square youtube"></i><span>Youtube</span><i
                                    class="fa fa-minus-circle float-right"></i></li>
                            <li class="add"><a href="page-addlisting.html#" class="add">Add new section</a><a
                                    href="page-addlisting.html#" class="float-right"><i class="fa fa-plus-circle"></i></a>
                            </li>
                        </ul>
                        <div class="open-hour"><label class="nhan">Open Hours*</label>
                            <ul class="list-hour">
                                <li class="clearfix">
                                    <div class="day">Mon - Sat</div>
                                    <div class="time"><span class="hour">08</span><span class="am">am</span><span
                                            class="to">to</span><span class="hour">05</span><span class="am">pm</span><a
                                            href="page-addlisting.html#" class="float-right" title=""><i
                                                class="fa fa-minus-circle"></i></a></div>
                                </li>
                                <li class="clearfix">
                                    <div class="day">Day</div>
                                    <div class="time"><span class="solid">__</span><span class="am">am</span><span
                                            class="to">to</span><span class="solid">__</span><span class="am">pm</span><a
                                            href="page-addlisting.html#" class="float-right"><i
                                                class="fa fa-plus-circle"></i></a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-accadion">
                <div class="row">
                    <div class="col-lg-2"><h5 class="title-list">Pricing</h5></div>
                    <div class="col-lg-10">
                        <div class="flat-accordion">
                            <div class="flat-toggle">
                                <div class="toggle-title active">Section 1</div>
                                <div class="toggle-content">

                                        <ul class="list-input">
                                            <li class="clearfix excep"><p class="input-info title"><input type="text"
                                                                                                          name="nell"
                                                                                                          placeholder="Nellara">
                                                </p>
                                                <p class="input-info descrip"><input type="text" name="late"
                                                                                     placeholder="Late evening craving for some comfort food led me to this place">
                                                </p>
                                                <p class="input-info pricing"><input type="text" name="price"
                                                                                     placeholder="7.99"><span>USD</span>
                                                </p>
                                                <p class="input-info add-icon"><i class="fa fa-minus-circle"></i></p>
                                            </li>
                                            <li class="clearfix"><p class="input-info title"><input type="text"
                                                                                                    name="title"
                                                                                                    placeholder="Title*">
                                                </p>
                                                <p class="input-info descrip"><input type="text" name="des"
                                                                                     placeholder="Description*"></p>
                                                <p class="input-info pricing"><input type="text" name="price2"
                                                                                     placeholder="Price*"><span>USD</span>
                                                </p>
                                                <p class="input-info add-icon"><a href="page-addlisting.html#" title=""><i
                                                            class="fa fa-plus-circle"></i></a></p></li>
                                        </ul>

                                </div>
                            </div><!-- /toggle -->
                            <div class="flat-toggle">
                                <div class="toggle-title">Section 2</div>
                                <div class="toggle-content">

                                        <ul class="list-input">
                                            <li class="clearfix"><p class="input-info title"><input type="text"
                                                                                                    name="title"
                                                                                                    placeholder="Title*">
                                                </p>
                                                <p class="input-info descrip"><input type="text" name="des" id="des"
                                                                                     placeholder="Description*"></p>
                                                <p class="input-info pricing"><input type="text" name="price2"
                                                                                     id="price2"
                                                                                     placeholder="Price*"><span>USD</span>
                                                </p>
                                                <p class="input-info add-icon"><a href="page-addlisting.html#" title=""><i
                                                            class="fa fa-plus-circle"></i></a></p></li>
                                        </ul>

                                </div>
                            </div><!-- /toggle --></div><!-- /.flat-accordion -->
                        <div class="button-addlisting">
                            <button type="submit" class="flat-button"  >Add
                                Listing
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>
@endsection

@section('javascript')
    <script src="/javascript/jquery.cookie.js"></script>
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
            uploadMultiple:true,
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
                 $('#images').val(response);
            },
        });
    </script>

@stop
