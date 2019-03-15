@extends('layouts.app')

@section('content')
    @include('layouts.slider')

    <section class="flat-row section-client">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center"><h1 class="title">Categories</h1>
                        <div class="sub-title">What do you need to find?</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-client" data-item="4" data-nav="true" data-dots="false" data-auto="false">
                        <div class="client">
                            <div class="featured-client"><img src="images/clients/1.jpg" alt="image"></div>
                            <div class="content-client clearfix">
                                <div class="icon"><img src="images/clients/icon1.png" alt="image"></div>
                                <div class="text"><h6><a href="index.html#" title="">Hotel & Travel</a></h6>
                                    <p>45 Listing</p></div>
                            </div>
                        </div>
                        <div class="client">
                            <div class="featured-client"><img src="images/clients/2.jpg" alt="image"></div>
                            <div class="content-client clearfix">
                                <div class="icon"><img src="images/clients/icon2.png" alt="image"></div>
                                <div class="text"><h6><a href="index.html#" title="">Healthy & fitness</a></h6>
                                    <p>45 Listing</p></div>
                            </div>
                        </div>
                        <div class="client">
                            <div class="featured-client"><img src="images/clients/3.jpg" alt="image"></div>
                            <div class="content-client clearfix">
                                <div class="icon"><img src="images/clients/icon3.png" alt="image"></div>
                                <div class="text"><h6><a href="index.html#" title="">Real Estate</a></h6>
                                    <p>45 Listing</p></div>
                            </div>
                        </div>
                        <div class="client">
                            <div class="featured-client"><img src="images/clients/1.jpg" alt="image"></div>
                            <div class="content-client clearfix">
                                <div class="icon"><img src="images/clients/icon4.png" alt="image"></div>
                                <div class="text"><h6><a href="index.html#" title="">Restaurant</a></h6>
                                    <p>45 Listing</p></div>
                            </div>
                        </div>
                    </div><!-- /.flat-client --></div>
            </div>
        </div>
    </section>
    <section class="flat-row section-product bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center"><h1 class="title">Most Visited Places</h1>
                        <div class="sub-title">Some great addresses you should not miss</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="wrap-flat-product clearfix">
                    <div class="flat-product">
                        <div class="featured-product"><img src="images/services/1.jpg" alt="image">
                            <div class="time bg-green">Now Open</div>
                            <div class="rate-product">
                                <div class="link-review clearfix">
                                    <div class="button-product float-left">
                                        <button type="button" class="flat-button" onclick="location.href='#'">bar &
                                            coffe
                                        </button>
                                    </div>
                                    <div class="start-review float-right"><span class="flat-start"><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i></span><a href="index.html#"
                                                                                                           class="review">( 2
                                            reviewers )</a></div>
                                </div>
                                <div class="info-product"><h6 class="title"><a href="index.html#">Grand Prairie
                                            Restaurants</a></h6>
                                    <p>208 W 70th Street, New York, NY</p><a href="index.html#" class="heart"><i
                                            class="ion-android-favorite-outline"></i></a></div>
                            </div>
                        </div>
                        <div class="content-product">
                            <div class="tm"> TM</div>
                            <div class="text"><p>Nullam ultricies urna id ornare interdum. Maec enas ut suscipit
                                    mauris</p></div>
                        </div>
                    </div>
                    <div class="flat-product">
                        <div class="featured-product"><img src="images/services/2.jpg" alt="image">
                            <div class="time">Now Close</div>
                            <div class="rate-product">
                                <div class="link-review clearfix">
                                    <div class="button-product float-left">
                                        <button type="button" class="flat-button" onclick="location.href='#'">
                                            Restautrant
                                        </button>
                                    </div>
                                    <div class="start-review float-right"><span class="flat-start"><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i></span><a href="index.html#"
                                                                                                           class="review">( 2
                                            reviewers )</a></div>
                                </div>
                                <div class="info-product"><h6 class="title"><a href="index.html#">San Antonio
                                            Restaurants</a></h6>
                                    <p>208 W 70th Street, New York, NY</p><a href="index.html#" class="heart"><i
                                            class="ion-android-favorite-outline"></i></a></div>
                            </div>
                        </div>
                        <div class="content-product">
                            <div class="tm"> TM</div>
                            <div class="text"><p>Nullam ultricies urna id ornare interdum. Maec enas ut suscipit
                                    mauris</p></div>
                        </div>
                    </div>
                    <div class="flat-product">
                        <div class="featured-product"><img src="images/services/3.jpg" alt="image">
                            <div class="time">Now Open</div>
                            <div class="rate-product">
                                <div class="link-review clearfix">
                                    <div class="button-product float-left">
                                        <button type="button" class="flat-button" onclick="location.href='#'">EAT &
                                            DRINK
                                        </button>
                                    </div>
                                    <div class="start-review float-right"><span class="flat-start"><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i></span><a href="index.html#"
                                                                                                           class="review">( 2
                                            reviewers )</a></div>
                                </div>
                                <div class="info-product"><h6 class="title"><a href="index.html#">San Angelo
                                            Restaurants</a></h6>
                                    <p>208 W 70th Street, New York, NY</p><a href="index.html#" class="heart"><i
                                            class="ion-android-favorite-outline"></i></a></div>
                            </div>
                        </div>
                        <div class="content-product">
                            <div class="tm"> TM</div>
                            <div class="text"><p>Nullam ultricies urna id ornare interdum. Maec enas ut suscipit
                                    mauris</p></div>
                        </div>
                    </div>
                    <div class="flat-product">
                        <div class="featured-product"><img src="images/services/4.jpg" alt="image">
                            <div class="time bg-green">Now Open</div>
                            <div class="rate-product">
                                <div class="link-review clearfix">
                                    <div class="button-product float-left">
                                        <button type="button" class="flat-button" onclick="location.href='#'">bar &
                                            coffe
                                        </button>
                                    </div>
                                    <div class="start-review float-right"><span class="flat-start"><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i></span><a href="index.html#"
                                                                                                           class="review">( 2
                                            reviewers )</a></div>
                                </div>
                                <div class="info-product"><h6 class="title"><a href="index.html#">Brownsville
                                            Restaurants</a></h6>
                                    <p>208 W 70th Street, New York, NY</p><a href="index.html#" class="heart"><i
                                            class="ion-android-favorite-outline"></i></a></div>
                            </div>
                        </div>
                        <div class="content-product">
                            <div class="tm"> TM</div>
                            <div class="text"><p>Nullam ultricies urna id ornare interdum. Maec enas ut suscipit
                                    mauris</p></div>
                        </div>
                    </div>
                    <div class="flat-product">
                        <div class="featured-product"><img src="images/services/5.jpg" alt="image">
                            <div class="time">Now Close</div>
                            <div class="rate-product">
                                <div class="link-review clearfix">
                                    <div class="button-product float-left">
                                        <button type="button" class="flat-button" onclick="location.href='#'">
                                            Restautrant
                                        </button>
                                    </div>
                                    <div class="start-review float-right"><span class="flat-start"><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i></span><a href="index.html#"
                                                                                                           class="review">( 2
                                            reviewers )</a></div>
                                </div>
                                <div class="info-product"><h6 class="title"><a href="index.html#">Beaumont
                                            Restaurants</a></h6>
                                    <p>208 W 70th Street, New York, NY</p><a href="index.html#" class="heart"><i
                                            class="ion-android-favorite-outline"></i></a></div>
                            </div>
                        </div>
                        <div class="content-product">
                            <div class="tm"> TM</div>
                            <div class="text"><p>Nullam ultricies urna id ornare interdum. Maec enas ut suscipit
                                    mauris</p></div>
                        </div>
                    </div>
                    <div class="flat-product">
                        <div class="featured-product"><img src="images/services/6.jpg" alt="image">
                            <div class="time">Now Open</div>
                            <div class="rate-product">
                                <div class="link-review clearfix">
                                    <div class="button-product float-left">
                                        <button type="button" class="flat-button" onclick="location.href='#'">EAT &
                                            DRINK
                                        </button>
                                    </div>
                                    <div class="start-review float-right"><span class="flat-start"><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i></span><a href="index.html#"
                                                                                                           class="review">( 2
                                            reviewers )</a></div>
                                </div>
                                <div class="info-product"><h6 class="title"><a href="index.html#">Corpus Christi
                                            Restaurants</a></h6>
                                    <p>208 W 70th Street, New York, NY</p><a href="index.html#" class="heart"><i
                                            class="ion-android-favorite-outline"></i></a></div>
                            </div>
                        </div>
                        <div class="content-product">
                            <div class="tm"> TM</div>
                            <div class="text"><p>Nullam ultricies urna id ornare interdum. Maec enas ut suscipit
                                    mauris</p></div>
                        </div>
                    </div>
                    <div class="flat-product">
                        <div class="featured-product"><img src="images/services/3.jpg" alt="image">
                            <div class="time">Now Open</div>
                            <div class="rate-product">
                                <div class="link-review clearfix">
                                    <div class="button-product float-left">
                                        <button type="button" class="flat-button" onclick="location.href='#'">EAT &
                                            DRINK
                                        </button>
                                    </div>
                                    <div class="start-review float-right"><span class="flat-start"><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i></span><a href="index.html#"
                                                                                                           class="review">( 2
                                            reviewers )</a></div>
                                </div>
                                <div class="info-product"><h6 class="title"><a href="index.html#">San Angelo
                                            Restaurants</a></h6>
                                    <p>208 W 70th Street, New York, NY</p><a href="index.html#" class="heart"><i
                                            class="ion-android-favorite-outline"></i></a></div>
                            </div>
                        </div>
                        <div class="content-product">
                            <div class="tm"> TM</div>
                            <div class="text"><p>Nullam ultricies urna id ornare interdum. Maec enas ut suscipit
                                    mauris</p></div>
                        </div>
                    </div>
                    <div class="flat-product">
                        <div class="featured-product"><img src="images/services/4.jpg" alt="image">
                            <div class="time bg-green">Now Open</div>
                            <div class="rate-product">
                                <div class="link-review clearfix">
                                    <div class="button-product float-left">
                                        <button type="button" class="flat-button" onclick="location.href='#'">bar &
                                            coffe
                                        </button>
                                    </div>
                                    <div class="start-review float-right"><span class="flat-start"><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i></span><a href="index.html#"
                                                                                                           class="review">( 2
                                            reviewers )</a></div>
                                </div>
                                <div class="info-product"><h6 class="title"><a href="index.html#">Brownsville
                                            Restaurants</a></h6>
                                    <p>208 W 70th Street, New York, NY</p><a href="index.html#" class="heart"><i
                                            class="ion-android-favorite-outline"></i></a></div>
                            </div>
                        </div>
                        <div class="content-product">
                            <div class="tm"> TM</div>
                            <div class="text"><p>Nullam ultricies urna id ornare interdum. Maec enas ut suscipit
                                    mauris</p></div>
                        </div>
                    </div>
                    <div class="flat-product">
                        <div class="featured-product"><img src="images/services/1.jpg" alt="image">
                            <div class="time bg-green">Now Open</div>
                            <div class="rate-product">
                                <div class="link-review clearfix">
                                    <div class="button-product float-left">
                                        <button type="button" class="flat-button" onclick="location.href='#'">bar &
                                            coffe
                                        </button>
                                    </div>
                                    <div class="start-review float-right"><span class="flat-start"><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i></span><a href="index.html#"
                                                                                                           class="review">( 2
                                            reviewers )</a></div>
                                </div>
                                <div class="info-product"><h6 class="title"><a href="index.html#">Grand Prairie
                                            Restaurants</a></h6>
                                    <p>208 W 70th Street, New York, NY</p><a href="index.html#" class="heart"><i
                                            class="ion-android-favorite-outline"></i></a></div>
                            </div>
                        </div>
                        <div class="content-product">
                            <div class="tm"> TM</div>
                            <div class="text"><p>Nullam ultricies urna id ornare interdum. Maec enas ut suscipit
                                    mauris</p></div>
                        </div>
                    </div>
                    <div class="load-more text-center">
                        <button type="button" class="flat-button">Load More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row section-download parallax parallax2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="flat-counter"><span class="over">Over</span>
                        <div class="content-counter">
                            <div class="numb-count" data-to="1512999" data-speed="1000" data-waypoint-active="yes">
                                1,512,999
                            </div>
                        </div>
                        <span class="download">Downloads</span></div>
                    <p>Yes, this is real Our application is already available for android and ios only with a touch you
                        will <br>easily find what do you want</p>
                    <div class="flat-download">
                        <button type="button" class="flat-button" onclick="location.href='#'"><i
                                class="ion-social-android"></i>Download for Android
                        </button>
                        <button type="button" class="flat-button" onclick="location.href='#'"><i
                                class="ion-social-apple"></i>Download for Apple
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row blog-shortcode">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section style2"><h1 class="title">Latest News</h1></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <article class="post clearfix">
                        <div class="featured-post"><a href="blog-single.html"><img src="images/blog/s1.jpg" alt="image"></a>
                            <ul class="post-comment">
                                <li class="date"> 27</li>
                                <li class="month">AUG</li>
                            </ul>
                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <ul class="meta-data clearfix">
                                <li class="category">Posted in: <a href="index.html#">Restaurant, </a><a
                                        href="index.html#">Hotel</a></li>
                                <li>by: <a href="index.html#">admin</a></li>
                            </ul><!-- /.meta-post --><h3 class="title-post"><a href="blog-single.html"> Top 10 French
                                    restaurants </a></h3>
                            <p>Sed ut perspiciatis unde omnis iste error sit luptatem accusantium doloremque lau
                                dantium,</p>
                            <div class="more-link"><a href="blog-single.html">Read More</a></div>
                        </div><!-- /.content-post --></article>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <article class="post clearfix">
                        <div class="featured-post"><a href="blog-single.html"><img src="images/blog/s2.jpg" alt="image"></a>
                            <ul class="post-comment">
                                <li class="date"> 21</li>
                                <li class="month">DEC</li>
                            </ul>
                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <ul class="meta-data clearfix">
                                <li class="category">Posted in: <a href="index.html#">Restaurant, </a><a
                                        href="index.html#">Hotel</a></li>
                                <li>by: <a href="index.html#">admin</a></li>
                            </ul><!-- /.meta-post --><h3 class="title-post"><a href="blog-single.html"> 6 Tips to retain
                                    your top sales talent </a></h3>
                            <p>Sed ut perspiciatis unde omnis iste error sit luptatem accusantium doloremque lau
                                dantium,</p>
                            <div class="more-link"><a href="blog-single.html">Read More</a></div>
                        </div><!-- /.content-post --></article>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <article class="post clearfix">
                        <div class="featured-post"><a href="blog-single.html"><img src="images/blog/s3.jpg" alt="image"></a>
                            <ul class="post-comment">
                                <li class="date"> 18</li>
                                <li class="month">JUN</li>
                            </ul>
                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <ul class="meta-data clearfix">
                                <li class="category">Posted in: <a href="index.html#">Restaurant, </a><a
                                        href="index.html#">Hotel</a></li>
                                <li>by: <a href="index.html#">admin</a></li>
                            </ul><!-- /.meta-post --><h3 class="title-post"><a href="blog-single.html"> Top 10 French
                                    restaurants </a></h3>
                            <p>Sed ut perspiciatis unde omnis iste error sit luptatem accusantium doloremque lau
                                dantium,</p>
                            <div class="more-link"><a href="blog-single.html">Read More</a></div>
                        </div><!-- /.content-post --></article>
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row v1 bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-section"><h1 class="title">Newsletter</h1>
                        <div class="sub-title">Subscribe now and receive weekly newsletter with</div>
                    </div>
                    <form id="subscribe-form" class="flat-mailchimp" method="post" action="index.html#"
                          data-mailchimp="true">
                        <div class="field clearfix" id="subscribe-content"><p class="wrap-input-email"><input
                                    type="text" tabindex="2" id="subscribe-email" name="subscribe-email"
                                    placeholder="Your Email Here"></p>
                            <p class="wrap-btn">
                                <button type="button" id="subscribe-button" class=" subscribe-submit effect-button"
                                        title="Subscribe now">SUBSCRIBE
                                </button>
                            </p>
                        </div>
                        <div id="subscribe-msg"></div>
                    </form>
                </div>
                <div class="col-lg-2">
                    <div class="flat-counter text-center">
                        <div class="content-counter">
                            <div class="icon-count"><i class="ion-waterdrop"></i></div>
                            <div class="name-count">Listing</div>
                            <div class="numb-count" data-to="1897" data-speed="2000" data-waypoint-active="yes">1897
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="flat-counter text-center">
                        <div class="content-counter">
                            <div class="icon-count"><i class="ion-pricetags"></i></div>
                            <div class="name-count">Categories</div>
                            <div class="numb-count" data-to="967" data-speed="2000" data-waypoint-active="yes">967</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="flat-counter text-center">
                        <div class="content-counter">
                            <div class="icon-count"><i class="ion-ios-people"></i></div>
                            <div class="name-count">Users</div>
                            <div class="numb-count" data-to="1101" data-speed="2000" data-waypoint-active="yes">1101
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
