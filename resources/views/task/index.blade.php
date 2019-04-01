@extends('layouts.app')

@section('content')
@include('layouts.banner')
<section class="main-content page-listing-grid">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="flat-select clearfix">
                    <div class="float-left width50 clearfix">
                        <div class="one-three showing">
                            <p><span>16</span>Found Listings</p>
                        </div>
                    </div>

                </div>
                <div class="listing-list">
                    @foreach($tasks as $task)
                    <div class="flat-product clearfix">
                        <div class="featured-product">
                            <img src="{{$task->cover}}" alt="image" />
                            <div class="time">
                                Now Close
                            </div>
                        </div>
                        <div class="rate-product">
                            <div class="link-review clearfix">
                                <div class="button-product float-left">
                                    <button type="button" class="flat-button" onclick="location.href='#'"> Restautrant </button>
                                </div>
                                <div class="start-review">
                                    {{--<span class="flat-start">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>--}}
                                    {{--<a href="listing-list.html#" class="review">
                                        ( 2 reviewers )
                                    </a>--}}
                                </div>
                            </div>
                            <div class="info-product">
                                <h6 class="title">
                                    <a href="listing-single.html">{{$task->title}}</a></h6>
                                <p>208 W 70th Street, New York, NY</p>
                                <a href="listing-list.html#" class="heart"><i class="ion-android-favorite-outline"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="blog-pagination style2 text-center">
                    <ul class="flat-pagination clearfix">
                        <li class="active"><a href="listing-list.html#">1</a></li>
                        <li><a href="listing-list.html#">2</a></li>
                        <li><a href="listing-list.html#">3</a></li>
                        <li class="next"><a href="listing-list.html#">Next</a></li>
                    </ul>
                    <!-- /.flat-pagination -->
                </div>
                <!-- /.blog-pagination -->
            </div>
            <!-- /.col-lg-9 -->
            @include('layouts.task-right')
            <!-- /.col-md-3 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

@endsection
