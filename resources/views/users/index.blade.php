@extends('layouts.app')

@section('content')
    @include('layouts.banner')
    <section class="main-content page-listing-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">

                    <div class="listing-list">
                        <div class="dw">
                            @foreach($users as $user)
                                <div class="dw-panel" style="border: 1px solid #dbdbdb;margin-right: 5px;margin-bottom: 5px;">
                                    <div class="featured-product">
                                        <a href="/users/{{$user->id}}">
                                            <img src="{{$user->head_img}}" alt="image" class="dw-panel__content">
                                        </a>
                                    </div>
                                    <div class="content-product">
                                        <div class="text" style="padding-left: 20px;">
                                            <h5>
                                                <a href="/users/{{$user->id}}">
                                                    {{$user->name}}
                                                </a>
                                            </h5>
                                            <p>
                                                {{$user->introduction}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="blog-pagination style2 text-center">

                        {{ $users->links() }}
                    </div>
                    <!-- /.blog-pagination -->
                </div>
                <!-- /.col-lg-9 -->
            @include('users.right')
            <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

@endsection

@section('css')
    @parent
    <link rel="stylesheet" type="text/css" href="/stylesheets/driveway.css">
    <style>
        @media (min-width: 1500px) {
            .dw {
                -webkit-column-count: 3;
                -moz-column-count: 3;
                column-count: 3;
            }
        }
    </style>
@endsection
