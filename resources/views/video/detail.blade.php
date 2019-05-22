@extends('layouts.app') @section('content') @include('layouts.banner')
<section class="main-content blog-posts blog-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="post-wrap">
                    <article class="post clearfix">



                        <div class="content-post">
                            <h3 class="title-post"> {{$video->title}} </h3>
                            <ul class="meta-post clearfix">
                                <li class="time"> January 22, 2017</li>
                                <li class="categories">
                                    <a href="blog-single.html#">Business</a>,
                                    <a href="blog-single.html#">Leasing</a>
                                </li>
                            </ul>
                            <!-- /.meta-post -->
                            <div class="entry excerpt">
                                {{$video->content}}
                            </div>
                        </div>
                        <!-- /.content-post -->
                    </article>
                </div>
                <!-- /.post-wrap -->
            </div>
            <!-- /.col-lg-9 -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="widget widget-recent-news">
                        <h5 class="widget-title">Recent Video</h5>
                        <ul class="popular-news clearfix">
                            @foreach($recent as $video)
                                <li>
                                    <div class="text">
                                        <h6><a href="/task/{{$video->id}}">{{$video->title}}</a></h6>
                                        <p>{{$video->created_at}}</p>
                                    </div>
                                </li>

                            @endforeach

                        </ul>
                        <!-- /.popular-news -->
                    </div>
                    <!-- /.widget-popular-news -->



                </div>
                <!-- /.sidebar -->
            </div>
            <!-- /.col-md-3 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Footer --> @endsection
