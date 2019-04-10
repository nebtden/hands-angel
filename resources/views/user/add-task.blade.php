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
                                <textarea class="" tabindex="4" name="comment">{{ $task->comment??'' }}</textarea>
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
                            <button type="submit" class="flat-button">Submit</button>
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

@endsection
