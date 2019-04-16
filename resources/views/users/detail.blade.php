@extends('layouts.app')

@section('content')
    @include('layouts.banner')
    <section class="main-content blog-posts blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="post-wrap">
                        <article class="post clearfix">
                            <div class="content-post">
                                <h3 class="title-post">  </h3>
                                <ul class="meta-post clearfix">
                                    <li class="time"> {{$user->created_at}}</li>

                                </ul>
                            </div>
                            <div class="main-single">
                                <div class="comments-area">
                                    <ol class="comment-list">
                                        <li class="comment">
                                            <article class="comment-body clearfix">
                                                <div class="comment-author">
                                                    <img src="{{$user->head_img}}" alt="image" />
                                                </div>
                                                <div class="comment-text">
                                                    <div class="comment-metadata">
                                                        <h5><a href="#">{{$user->name}}</a></h5>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p>{{$user->introduction}}</p>
                                                    </div>
                                                </div>
                                            </article>
                                        </li>
                                    </ol>

                                    <ul class="add-section" style="">
                                        <li class="twitter">
                                            <i class="fab fa-twitter-square twitter"></i>
                                            <span>Twitter</span>
                                            <a href="#" title="">
                                                {{--{{ $user->twitter }}--}}
                                                Due to too many complaints, the twitter information is temporarily not displayed
                                            </a>
                                        </li>
                                        <li class="face">
                                            <i class="fab fa-facebook-square face"></i>
                                            <span>Facebook</span>
                                            <a href="#" title="">
                                                {{--{{ $user->facebook }}--}}
                                                Due to too many complaints, the facebook information is temporarily not displayed
                                            </a>

                                        </li>
                                        <li class="wechat">
                                            <i class="fab fa-wechat wechat"></i>
                                            <span>Wechat</span>
                                            {{--{{ $user->wechat }}--}}
                                             Due to too many complaints, the wechat information is temporarily not displayed
                                        </li>

                                        <li class="wechat">
                                            <i class="fab fa-line line"></i>
                                            <span>Line</span>
                                            {{--{{ $user->line }}--}}
                                            Due to too many complaints, the line information is temporarily not displayed
                                        </li>

                                    </ul>


                                    <div class="comment-respond" id="respond">

                                        <h2 class="comment-reply-title">Send a message</h2>
                                        <form novalidate="" class="comment-form clearfix" id="commentform" method="post" action="{{ url('/user/message') }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                                            <p class="comment-form-comment">
                                                <textarea class="" tabindex="4" placeholder="Message" name="comment" required="">you</textarea>
                                            </p>
                                            <p class="form-submit">
                                                <button class="comment-submit effect-button">Send Message</button>
                                            </p>
                                        </form>
                                    </div>
                                    <!-- /.comment-respond -->
                                </div>
                                <!-- /.comments-area -->
                            </div>
                        </article>
                    </div>
                    <!-- /.post-wrap -->
                </div>
                <!-- /.col-lg-9 -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="widget widget-recent-news">
                            <h5 class="widget-title">Recent Users</h5>
                            <ul class="popular-news clearfix">
                                @foreach($recent as $user)
                                    <li>
                                        <div class="text">
                                            <h6><a href="/task/{{$user->id}}">{{$user->name}}</a></h6>
                                            <p>{{$user->created_at}}</p>
                                        </div> </li> @endforeach
                            </ul>
                            <!-- /.popular-news -->
                        </div>
                    </div>
                    <!-- /.sidebar -->
                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- Footer -->
@endsection

@section('css')
    <style type="text/css">
        .add-section li{
            border-bottom: 1px solid #e5e5e5;
            line-height: 50px;
        }


        .add-section li span{
            width: 70px;
            margin: 0px 10px 0px 5px;
            display: inline-block;
            color: #1DA1F2;
        }
          .add-section li i.twitter {
            color: #1DA1F2;
        }

        .add-section li i.face {
            color: #3b5998;
        }

        .add-section li i.wechat {
            color: #00bd0c;;
        }
        .add-section li i.line{
            color: #00bd0c;
        }

    </style>
@endsection
