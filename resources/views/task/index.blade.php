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
                        <div class="one-three more-filter">
                            <ul class="unstyled">
                                <li class="current"><a href="listing-list.html#" class="title">More Fillter <i class="fa fa-angle-right"></i></a>
                                    <ul class="unstyled">
                                        <li class="en"><input type="checkbox" id="wifi" name="category" /><label for="wifi">Wifi</label></li>
                                        <li class="en"><input type="checkbox" id="smoking" name="category" /><label for="smoking">Smoking allowed</label></li>
                                        <li class="en"><input type="checkbox" id="onl" name="category" /><label for="onl">Online Reservation</label></li>
                                        <li class="en"><input type="checkbox" id="parking" name="category" checked="checked" /><label for="parking">Parking street</label></li>
                                        <li class="en"><input type="checkbox" id="event" name="category" /><label for="event">Events</label></li>
                                        <li class="en"><input type="checkbox" id="in" name="category" checked="checked" /><label for="in">Elevator in building</label></li>
                                        <li class="en"><input type="checkbox" id="card" name="category" /><label for="card">Credit Card Payment</label></li>
                                    </ul> </li>
                            </ul>
                        </div>
                        <div class="one-three sortby">
                            <ul class="unstyled">
                                <li class="current"><a href="listing-list.html#" class="title">Sort by: Random <i class="fa fa-angle-right"></i></a>
                                    <ul class="unstyled">
                                        <li class="en"><a href="listing-list.html#" title=""><i class="fa fa-caret-right"></i>Open Now</a></li>
                                        <li class="en"><a href="listing-list.html#" title=""><i class="fa fa-caret-right"></i>Most reviewed</a></li>
                                        <li class="en"><a href="listing-list.html#" title=""><i class="fa fa-caret-right"></i>Top rated</a></li>
                                        <li class="en"><a href="listing-list.html#" title=""><i class="fa fa-caret-right"></i>Random</a></li>
                                    </ul> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="flat-sort">
                            <a href="listing-list.html" class="course-list-view active"><i class="fa fa-list"></i></a>
                            <a href="listing-grid.html" class="course-grid-view "><i class="fa fa-th"></i></a>
                        </div>
                    </div>
                </div>
                <div class="listing-list">
                    <div class="flat-product clearfix">
                        <div class="featured-product">
                            <img src="/images/services/l1.jpg" alt="image" />
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
                                    <span class="flat-start"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                    <a href="listing-list.html#" class="review">( 2 reviewers )</a>
                                </div>
                            </div>
                            <div class="info-product">
                                <h6 class="title"><a href="listing-single.html">San Antonio Restaurants</a></h6>
                                <p>208 W 70th Street, New York, NY</p>
                                <a href="listing-list.html#" class="heart"><i class="ion-android-favorite-outline"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="flat-product clearfix">
                        <div class="featured-product">
                            <img src="/images/services/l2.jpg" alt="image" />
                            <div class="time">
                                Now Close
                            </div>
                        </div>
                        <div class="rate-product">
                            <div class="link-review clearfix">
                                <div class="button-product float-left">
                                    <button type="button" class="flat-button bg-green" onclick="location.href='#'"> bar &amp; coffe </button>
                                </div>
                                <div class="start-review">
                                    <span class="flat-start"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                    <a href="listing-list.html#" class="review">( 2 reviewers )</a>
                                </div>
                            </div>
                            <div class="info-product">
                                <h6 class="title"><a href="listing-single.html">Grand Prairie Restaurants</a></h6>
                                <p>208 W 70th Street, New York, NY</p>
                                <a href="listing-list.html#" class="heart"><i class="ion-android-favorite-outline"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="flat-product clearfix">
                        <div class="featured-product">
                            <img src="/images/services/l3.jpg" alt="image" />
                            <div class="time bg-green">
                                Now Open
                            </div>
                        </div>
                        <div class="rate-product">
                            <div class="link-review clearfix">
                                <div class="button-product float-left">
                                    <button type="button" class="flat-button" onclick="location.href='#'">bar &amp; coffe </button>
                                </div>
                                <div class="start-review">
                                    <span class="flat-start"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                    <a href="listing-list.html#" class="review">( 2 reviewers )</a>
                                </div>
                            </div>
                            <div class="info-product">
                                <h6 class="title"><a href="listing-single.html">Brownsville Restaurants</a></h6>
                                <p>208 W 70th Street, New York, NY</p>
                                <a href="listing-list.html#" class="heart"><i class="ion-android-favorite-outline"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="flat-product clearfix">
                        <div class="featured-product">
                            <img src="/images/services/l4.jpg" alt="image" />
                            <div class="time">
                                Now Close
                            </div>
                        </div>
                        <div class="rate-product">
                            <div class="link-review clearfix">
                                <div class="button-product float-left">
                                    <button type="button" class="flat-button bg-yellow" onclick="location.href='#'"> EAT &amp; DRINK </button>
                                </div>
                                <div class="start-review">
                                    <span class="flat-start"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                    <a href="listing-list.html#" class="review">( 2 reviewers )</a>
                                </div>
                            </div>
                            <div class="info-product">
                                <h6 class="title"><a href="listing-single.html">San Angelo Restaurants</a></h6>
                                <p>208 W 70th Street, New York, NY</p>
                                <a href="listing-list.html#" class="heart"><i class="ion-android-favorite-outline"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="flat-product clearfix">
                        <div class="featured-product">
                            <img src="/images/services/l5.jpg" alt="image" />
                            <div class="time">
                                Now Close
                            </div>
                        </div>
                        <div class="rate-product">
                            <div class="link-review clearfix">
                                <div class="button-product float-left">
                                    <button type="button" class="flat-button bg-yellow" onclick="location.href='#'"> EAT &amp; DRINK </button>
                                </div>
                                <div class="start-review">
                                    <span class="flat-start"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                    <a href="listing-list.html#" class="review">( 2 reviewers )</a>
                                </div>
                            </div>
                            <div class="info-product">
                                <h6 class="title"><a href="listing-single.html">Corpus Christi Restaurants</a></h6>
                                <p>208 W 70th Street, New York, NY</p>
                                <a href="listing-list.html#" class="heart"><i class="ion-android-favorite-outline"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="flat-product clearfix">
                        <div class="featured-product">
                            <img src="/images/services/l6.jpg" alt="image" />
                            <div class="time bg-green">
                                Now Open
                            </div>
                        </div>
                        <div class="rate-product">
                            <div class="link-review clearfix">
                                <div class="button-product float-left">
                                    <button type="button" class="flat-button" onclick="location.href='#'"> Restautrant </button>
                                </div>
                                <div class="start-review">
                                    <span class="flat-start"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                    <a href="listing-list.html#" class="review">( 2 reviewers )</a>
                                </div>
                            </div>
                            <div class="info-product">
                                <h6 class="title"><a href="listing-single.html">Beaumont Restaurants</a></h6>
                                <p>208 W 70th Street, New York, NY</p>
                                <a href="listing-list.html#" class="heart"><i class="ion-android-favorite-outline"></i></a>
                            </div>
                        </div>
                    </div>
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
