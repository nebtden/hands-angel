@extends('layouts.app') @section('content') @include('layouts.banner')
<section class="main-content blog-posts blog-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="post-wrap">
                    <article class="post clearfix">

                        @foreach($images as $image)
                            <div class="featured-post">
                                <img src="{{ $image->src }}" alt="image" />
                            </div>
                        @endforeach

                        <div class="content-post">
                            <h3 class="title-post"> {{$task->title}} </h3>
                            <ul class="meta-post clearfix">
                                <li class="time"> January 22, 2017</li>
                                <li class="categories"><a href="blog-single.html#">Business</a>, <a href="blog-single.html#">Leasing</a></li>
                            </ul>
                            <!-- /.meta-post -->
                            <div class="entry excerpt">
                                {{$task->content}}
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
                        <h5 class="widget-title">Recent Post</h5>
                        <ul class="popular-news clearfix">
                            @foreach($recent as $task)
                                <li>
                                    <div class="text">
                                        <h6><a href="/task/{{$task->id}}">{{$task->title}}</a></h6>
                                        <p>{{$task->created_at}}</p>
                                    </div>
                                </li>

                            @endforeach

                        </ul>
                        <!-- /.popular-news -->
                    </div>
                    <!-- /.widget-popular-news -->
                    <div class="widget widget_categories">
                        <h5 class="widget-title">Category</h5>
                        <ul>
                            @foreach ($types as $key=>$type)
                                <li><a href="/task?type={{$key}}">{{$type}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- /.widget-categories -->
{{--                    <div class="widget widget_tag">
                        <h5 class="widget-title">Tags</h5>
                        <div class="tag-list">
                            <a href="blog-single.html#">Business</a>
                            <a href="blog-single.html#">Consulting</a>
                            <a href="blog-single.html#">Finanve</a>
                            <a href="blog-single.html#">Insurance</a>
                            <a href="blog-single.html#">Management</a>
                            <a href="blog-single.html#">Portfolio</a>
                        </div>
                    </div>--}}

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
