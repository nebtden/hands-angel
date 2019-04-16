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
                                                <!-- .comment-author -->
                                                <div class="comment-text">
                                                    <div class="comment-metadata">
                                                        <h5><a href="#">{{$user->name}}</a></h5>
                                                    </div>
                                                    <!-- .comment-metadata -->
                                                    <div class="comment-content">
                                                        <p>{{$user->introduction}}</p>
                                                    </div>
                                                    <!-- .comment-content -->
                                                </div>
                                                <!-- /.comment-text -->
                                            </article>
                                            <!-- .comment-body -->
                                        </li>
                                        <!-- #comment-## -->
                                    </ol>

                                    <div class="comment-respond" id="respond">
                                        <h2 class="comment-reply-title">Leave a comment</h2>
                                        <form novalidate="" class="comment-form clearfix" id="commentform" method="post" action="#">
                                            <div class="wrap-input clearfix">
                                                <p class="comment-notes"><input type="text" placeholder="Your Name" aria-required="true" size="30" value="" name="author" id="author" /></p>
                                                <p class="comment-form-email"><input type="email" placeholder="Your Name" size="30" value="" name="email" id="email" /></p>
                                            </div>
                                            <p class="comment-form-comment"><textarea class="" tabindex="4" placeholder="Message" name="comment" required=""></textarea></p>
                                            <p class="form-submit"><button class="comment-submit effect-button">Send Message</button></p>
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
