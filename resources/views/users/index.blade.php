@extends('layouts.app')

@section('content')
    @include('layouts.banner')
    <section class="main-content page-listing-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">

                    <div class="listing-list">
                        @foreach($users as $user)
                            <div class="flat-product clearfix">
                                <div class="featured-product">

                                        <img src="{{ $user->head_img }}" alt="image" />
                                    <div class="time">                                    Now Close</div>
                                </div>
                                <div class="rate-product">
                                    <div class="link-review clearfix">
                                        <div class="button-product float-left">

                                        </div>
                                    </div>
                                    <div class="info-product">
                                        <h6 class="title">
                                            <a href="/users/{{$user->id}}">
                                                {{$user->name}}
                                            </a>
                                        </h6>
                                        <p>{{$user->introduction}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
