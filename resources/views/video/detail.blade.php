@extends('layouts.app') @section('content') @include('layouts.banner')
<section class="main-content blog-posts blog-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="post-wrap">
                    <article class="post clearfix">

                        <div class="content-post">
                            <h3 class="title-post"> {{$video->title}} </h3>

                            <div class="entry excerpt">
                                <img src="{{$video->img}}">
                            </div>
                            <p></p>
                            <p></p>

                            <br>
                            <p>
                                点此新窗口进行播放:
                                <a target="_blank"  href="{{$video->video}}" >
                                    <img src="/images/video.png" width="20px" height="20px">
                                </a>
                            </p>
                        </div>

                    </article>
                </div>
                <!-- /.post-wrap -->
            </div>
            <!-- /.col-lg-9 -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="widget widget-recent-news">
                        <h5 class="widget-title">相关视频</h5>
                        <ul class="popular-news clearfix">
                            @foreach($recent as $video)
                                <li>
                                    <div class="text">

                                        <p><a href="/task/{{$video->id}}">{{$video->title}}</a></p>
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
