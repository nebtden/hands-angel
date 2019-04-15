@extends('layouts.app')

@section('content')
    @include('layouts.banner')
    <section class="flat-row page-addlisting">
        <div class="container">
            <form method="post" action="{{ url('user/tasks') }}" class="filter-form form-addlist">
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
                                <textarea class="" tabindex="4" name="content">{{ $task->content??'' }}</textarea>
                            </p>
                            <p class="input-info icon">
                                <label class="nhan">Categories*</label>
                                <select class="type" name="categories">
                                    @foreach ($types as $key=>$type)
                                        <option value="{{$key}}">{{$type}}</option>
                                    @endforeach
                                </select>
                                <i class="fa fa-angle-down"></i>
                            </p>


                        <div class="add-images">
                            <label class="nhan">Gallery</label>
                            <div action="{{ url('upload') }}" class="dropzone" id="my-awesome-dropzone">
                                <input type="hidden" name="images" id="images" value="">
                            </div>
                        </div>
                        <div class="button-addlisting">
                            <button type="submit" class="flat-buttons">Submit</button>
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
            // addRemoveLinks : true,
            maxFilesize: 5,
            dictDefaultMessage: ' ',
            uploadMultiple:true,
            dictResponseError: 'Error uploading file!',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            success: function( file, response ){
                var val = $('#images').val();
                if (val) {
                    $('#images').val(val + ',' +response);
                } else {
                    $('#images').val( response);
                }
            },
            removedfile: function(file) {
                var name = file.name;
                console.log(name);
           }
        });
    </script>
    <style>
        .flat-buttons{
            position: relative;
        }

        .button-addlisting .flat-buttons {
            margin-top: 54px;
            font-size: 14px;
            padding: 15px 48px 18px 49px;
        }
        .flat-buttons:hover {
            color: #e8280b;
            background-color: #FFF;
        }

        .flat-buttons {
            padding: 17px 48px 17px 48px;
            background-color: #e8280b;
            /*background-color: transparent;*/
            font-size: 16px;
            box-shadow: 0 0 0 2px #E8280B;
            font-weight: 700;
            display: inline-block;
            text-align: center;
            color: #fff;
            cursor: pointer;
            z-index: 1;
            -webkit-border-radius: 25px;
            border-radius: 25px;
            -webkit-transition: color 0.3s;
            -moz-transition: color 0.3s;
            transition: color 0.3s;

        }

    </style>

@endsection
