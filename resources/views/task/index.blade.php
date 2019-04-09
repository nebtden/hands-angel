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
                                    <button type="button" class="flat-button" onclick="location.href='#'">
                                        Restautrant
                                    </button>
                                </div>
                                <div class="start-review">

                                </div>
                            </div>
                            <div class="info-product">
                                <h6 class="title">
                                    <a href="/tasks/{{$task->id}}">{{$task->title}}</a>
                                </h6>
                                <p>208 W 70th Street, New York, NY</p>
{{--                                <a href="listing-list.html#" class="heart">
                                    <i class="ion-android-favorite-outline">

                                    </i>
                                </a>--}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="blog-pagination style2 text-center">

                    {{ $tasks->links() }}
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
