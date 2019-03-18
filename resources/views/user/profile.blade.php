@extends('layouts.app')

@section('content')
    @include('layouts.banner')
    <section class="flat-row page-profile bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="flat-user profile"><a href="page-user.html" class="edit" title="">Back to profile <i class="fa fa-backward"></i></a>
                        <ul class="info">
                            <li><a href="page-profile.html#" title=""><i class="fa fa-user"></i>BASIC INFOMATION</a>
                            </li>
                            <li><a href="page-profile.html#" title=""><i class="fa fa-link"></i>ON THE WEB</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="flat-tabs style2" data-effect="fadeIn">
                        <ul class="menu-tab clearfix">
                            <li class="active"><a href="page-profile.html#"><i class="ion-navicon-round"></i>(3)
                                    Listings</a></li>
                            <li class=""><a href="page-profile.html#"><i class="ion-chatbubbles"></i>(3) Reviews</a>
                            </li>
                        </ul><!-- /.menu-tab -->
                        <div class="content-tab listing-user profile">
                            <div class="content-inner active">
                                <div class="basic-info"><h5>Basic Infomation</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="upload-img">
                                                <form action="{{ url('user/upload') }}" class="dropzone" id="my-awesome-dropzone">
                                                    {{ csrf_field() }}
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <form method="post" action="page-profile.html#" class="form-profile"><p class="input-info"><label>Your name*</label>
                                                    <input type="text" name="name" id="name"></p>
                                                <p class="input-info">
                                                    <label>Your Phone Numbers*</label>
                                                    <input type="text" name="phone" id="phone"></p>
                                                <p class="input-info">
                                                    <label>Your Phone Numbers*</label>
                                                    <input type="text" name="email" id="email"></p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="on-web">
                                    <div class="row">
                                        <div class="col-md-4"><h5>On the web</h5></div>
                                        <div class="col-md-8">
                                            <ul class="add-section">
                                                <li class="twitter"><i class="fa fa-twitter-square twitter"></i><span>Twitter</span><a href="https://twitter.com/" title="">https://twitter.com/</a>
                                                    <i class="fa fa-minus-circle float-right"></i></li>
                                                <li class="face"><i class="fa fa-facebook-square face"></i><span>Facebook</span>
                                                    <a href="https://www.facebook.com/" title="">https://www.facebook.com/</a><i class="fa fa-minus-circle float-right"></i></li>
                                                <li class="youtube"><i class="fa fa-youtube-square youtube"></i><span>Youtube</span><i class="fa fa-minus-circle float-right"></i></li>
                                                <li class="add"><a href="page-profile.html#" class="add">Add new
                                                        section</a><a href="page-profile.html#" title="" class="float-right"><i class="fa fa-plus-circle "></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="update-button text-center">
                                    <button type="button" class="flat-button" onclick="location.href='#'">Update
                                        Profile
                                    </button>
                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="author-review content-listing">
                                    <div class="comments-area">
                                        <ol class="comment-list">
                                            <li class="comment">
                                                <article class="comment-body clearfix">
                                                    <div class="comment-author">
                                                        <img src="images/services/c1.png" alt="image"></div>
                                                    <!-- .comment-author -->
                                                    <div class="comment-text">
                                                        <div class="comment-metadata"><h5><a href="page-profile.html#">Shaya Hill </a><span>on San Angelo Restaurants</span></h5>
                                                            <p class="day">12/01/2017</p>
                                                            <div class="flat-start"><i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                            </div>
                                                        </div><!-- .comment-metadata -->
                                                        <div class="comment-content"><p>Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit, sed do eiusmod tempor
                                                                incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                                minim veniam, quis nostrud exercitation ullamco</p></div>
                                                        <!-- .comment-content --></div><!-- /.comment-text --></article>
                                                <!-- .comment-body --></li><!-- #comment-## -->
                                            <li class="comment">
                                                <article class="comment-body clearfix">
                                                    <div class="comment-author"><img src="images/services/c2.png"
                                                                                     alt="image"></div>
                                                    <!-- .comment-author -->
                                                    <div class="comment-text">
                                                        <div class="comment-metadata"><h5><a href="page-profile.html#">Alex  Poole </a><span>on Grand Prairie Restaurants</span></h5>
                                                            <p class="day">12/01/2017</p>
                                                            <div class="flat-start">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                            </div>
                                                        </div><!-- .comment-metadata -->
                                                        <div class="comment-content"><p>Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit, sed do eiusmod tempor
                                                                incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                                minim veniam, quis nostrud exercitation ullamco</p></div>
                                                        <!-- .comment-content --></div><!-- /.comment-text --></article>
                                                <!-- .comment-body --></li><!-- #comment-## -->
                                            <li class="comment">
                                                <article class="comment-body clearfix">
                                                    <div class="comment-author"><img src="images/services/c3.png"
                                                                                     alt="image"></div>
                                                    <!-- .comment-author -->
                                                    <div class="comment-text">
                                                        <div class="comment-metadata"><h5><a href="page-profile.html#">Anthony
                                                                    Jones </a><span>on San Antonio Restaurants</span></h5>
                                                            <p class="day">12/01/2017</p>
                                                            <div class="flat-start"><i class="fa fa-star"></i><i
                                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                                    class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
                                                            </div>
                                                        </div><!-- .comment-metadata -->
                                                        <div class="comment-content"><p>Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit, sed do eiusmod tempor
                                                                incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                                minim veniam, quis nostrud exercitation ullamco</p></div>
                                                        <!-- .comment-content --></div><!-- /.comment-text --></article>
                                                <!-- .comment-body --></li><!-- #comment-## --></ol>
                                        <!-- .comment-list --></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
<script src="/javascript/dropzone.js"></script>
<link rel="stylesheet" type="text/css" href="/stylesheets/dropzone.css"><!-- Animation Style -->
