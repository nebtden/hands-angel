@extends('layouts.app')

@section('content')
    <section class="main-content page-listing-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="flat-select clearfix">
                        <div class="float-left width50 clearfix">
                            <div class="one-three showing"><p><span>16</span>Found Listings</p></div>
                            <div class="one-three more-filter">
                                <ul class="unstyled">
                                    <li class="current"><a href="listing-list.html#" class="title">More Fillter <i class="fa fa-angle-right"></i></a>
                                        <ul class="unstyled">
                                            <li class="en"><input type="checkbox" id="wifi" name="category"><label for="wifi">Wifi</label></li>
                                            <li class="en"><input type="checkbox" id="smoking" name="category"><label for="smoking">Smoking allowed</label></li>
                                            <li class="en"><input type="checkbox" id="onl" name="category"><label for="onl">Online Reservation</label></li>
                                            <li class="en"><input type="checkbox" id="parking" name="category" checked="checked"> <label for="parking">Parking street</label></li>
                                            <li class="en"><input type="checkbox" id="event" name="category"><label for="event">Events</label></li>
                                            <li class="en"><input type="checkbox" id="in" name="category" checked="checked"><label for="in">Elevator in building</label></li>
                                            <li class="en"><input type="checkbox" id="card" name="category"><label for="card">Credit Card Payment</label></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="one-three sortby">
                                <ul class="unstyled">
                                    <li class="current"><a href="listing-list.html#" class="title">Sort by: Random <i
                                                class="fa fa-angle-right"></i></a>
                                        <ul class="unstyled">
                                            <li class="en"><a href="listing-list.html#" title=""><i
                                                        class="fa fa-caret-right"></i>Open Now</a></li>
                                            <li class="en"><a href="listing-list.html#" title=""><i
                                                        class="fa fa-caret-right"></i>Most reviewed</a></li>
                                            <li class="en"><a href="listing-list.html#" title=""><i
                                                        class="fa fa-caret-right"></i>Top rated</a></li>
                                            <li class="en"><a href="listing-list.html#" title=""><i
                                                        class="fa fa-caret-right"></i>Random</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="float-right">
                            <div class="flat-sort"><a href="listing-list.html" class="course-list-view active"><i
                                        class="fa fa-list"></i></a><a href="listing-grid.html" class="course-grid-view "><i
                                        class="fa fa-th"></i></a></div>
                        </div>
                    </div>
                    <div class="listing-list">
                        <div class="flat-product clearfix">
                            <div class="featured-product"><img src="images/services/l1.jpg" alt="image">
                                <div class="time"> Now Close</div>
                            </div>
                            <div class="rate-product">
                                <div class="link-review clearfix">
                                    <div class="button-product float-left">
                                        <button type="button" class="flat-button" onclick="location.href='#'">
                                            Restautrant
                                        </button>
                                    </div>
                                    <div class="start-review"><span class="flat-start"><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></span><a href="listing-list.html#" class="review">( 2
                                            reviewers )</a></div>
                                </div>
                                <div class="info-product"><h6 class="title"><a href="listing-single.html">San Antonio
                                            Restaurants</a></h6>
                                    <p>208 W 70th Street, New York, NY</p><a href="listing-list.html#" class="heart"><i
                                            class="ion-android-favorite-outline"></i></a></div>
                            </div>
                        </div>
                        <div class="flat-product clearfix">
                            <div class="featured-product"><img src="images/services/l2.jpg" alt="image">
                                <div class="time"> Now Close</div>
                            </div>
                            <div class="rate-product">
                                <div class="link-review clearfix">
                                    <div class="button-product float-left">
                                        <button type="button" class="flat-button bg-green" onclick="location.href='#'">
                                            bar & coffe
                                        </button>
                                    </div>
                                    <div class="start-review"><span class="flat-start"><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></span><a href="listing-list.html#" class="review">( 2
                                            reviewers )</a></div>
                                </div>
                                <div class="info-product"><h6 class="title"><a href="listing-single.html">Grand Prairie
                                            Restaurants</a></h6>
                                    <p>208 W 70th Street, New York, NY</p><a href="listing-list.html#" class="heart"><i
                                            class="ion-android-favorite-outline"></i></a></div>
                            </div>
                        </div>
                        <div class="flat-product clearfix">
                            <div class="featured-product"><img src="images/services/l3.jpg" alt="image">
                                <div class="time bg-green"> Now Open</div>
                            </div>
                            <div class="rate-product">
                                <div class="link-review clearfix">
                                    <div class="button-product float-left">
                                        <button type="button" class="flat-button" onclick="location.href='#'">bar &
                                            coffe
                                        </button>
                                    </div>
                                    <div class="start-review"><span class="flat-start"><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></span><a href="listing-list.html#" class="review">( 2
                                            reviewers )</a></div>
                                </div>
                                <div class="info-product"><h6 class="title"><a href="listing-single.html">Brownsville
                                            Restaurants</a></h6>
                                    <p>208 W 70th Street, New York, NY</p><a href="listing-list.html#" class="heart"><i
                                            class="ion-android-favorite-outline"></i></a></div>
                            </div>
                        </div>
                        <div class="flat-product clearfix">
                            <div class="featured-product"><img src="images/services/l4.jpg" alt="image">
                                <div class="time"> Now Close</div>
                            </div>
                            <div class="rate-product">
                                <div class="link-review clearfix">
                                    <div class="button-product float-left">
                                        <button type="button" class="flat-button bg-yellow" onclick="location.href='#'">
                                            EAT & DRINK
                                        </button>
                                    </div>
                                    <div class="start-review"><span class="flat-start"><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></span><a href="listing-list.html#" class="review">( 2
                                            reviewers )</a></div>
                                </div>
                                <div class="info-product"><h6 class="title"><a href="listing-single.html">San Angelo
                                            Restaurants</a></h6>
                                    <p>208 W 70th Street, New York, NY</p><a href="listing-list.html#" class="heart"><i
                                            class="ion-android-favorite-outline"></i></a></div>
                            </div>
                        </div>
                        <div class="flat-product clearfix">
                            <div class="featured-product"><img src="images/services/l5.jpg" alt="image">
                                <div class="time"> Now Close</div>
                            </div>
                            <div class="rate-product">
                                <div class="link-review clearfix">
                                    <div class="button-product float-left">
                                        <button type="button" class="flat-button bg-yellow" onclick="location.href='#'">
                                            EAT & DRINK
                                        </button>
                                    </div>
                                    <div class="start-review"><span class="flat-start"><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></span><a href="listing-list.html#" class="review">( 2
                                            reviewers )</a></div>
                                </div>
                                <div class="info-product"><h6 class="title"><a href="listing-single.html">Corpus Christi
                                            Restaurants</a></h6>
                                    <p>208 W 70th Street, New York, NY</p><a href="listing-list.html#" class="heart"><i
                                            class="ion-android-favorite-outline"></i></a></div>
                            </div>
                        </div>
                        <div class="flat-product clearfix">
                            <div class="featured-product"><img src="images/services/l6.jpg" alt="image">
                                <div class="time bg-green"> Now Open</div>
                            </div>
                            <div class="rate-product">
                                <div class="link-review clearfix">
                                    <div class="button-product float-left">
                                        <button type="button" class="flat-button" onclick="location.href='#'">
                                            Restautrant
                                        </button>
                                    </div>
                                    <div class="start-review"><span class="flat-start"><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></span><a href="listing-list.html#" class="review">( 2
                                            reviewers )</a></div>
                                </div>
                                <div class="info-product"><h6 class="title"><a href="listing-single.html">Beaumont
                                            Restaurants</a></h6>
                                    <p>208 W 70th Street, New York, NY</p><a href="listing-list.html#" class="heart"><i
                                            class="ion-android-favorite-outline"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-pagination style2 text-center">
                        <ul class="flat-pagination clearfix">
                            <li class="active"><a href="listing-list.html#">1</a></li>
                            <li><a href="listing-list.html#">2</a></li>
                            <li><a href="listing-list.html#">3</a></li>
                            <li class="next"><a href="listing-list.html#">Next</a></li>
                        </ul><!-- /.flat-pagination --></div><!-- /.blog-pagination --></div>
                <!-- /.col-lg-9 -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class=" widget widget-form style2"><h5 class="widget-title"> Search Box</h5>
                            <form novalidate="" class="filter-form clearfix" id="filter-form" method="post"
                                  action="listing-list.html#"><p class="book-notes"><input type="text"
                                                                                           placeholder="What are you looking for?"
                                                                                           name="question" required="">
                                </p>
                                <p class="book-form-select icon"><select class=" dropdown_sort">
                                        <option value="">All Categories</option>
                                        <option value="">Hotel & travel</option>
                                        <option value="">Real Estate</option>
                                        <option value="">Restaurant</option>
                                        <option value="">Healthy & Fitness</option>
                                        <option value="">Food and coffee</option>
                                        <option value="">Drinks</option>
                                    </select><i class="fa fa-angle-down"></i></p>
                                <p class="book-form-address icon"><input type="text" placeholder="Address"
                                                                         name="address" required=""><i
                                        class="ion-android-locate"></i></p>
                                <p class="location">Location <i class="ion-location float-right"></i></p>
                                <p class="input-location form-filter"><span class="filter"><input id="ex8"
                                                                                                  data-slider-id='ex1Slider'
                                                                                                  type="text"
                                                                                                  data-slider-min="0"
                                                                                                  data-slider-max="10"
                                                                                                  data-slider-step="1"
                                                                                                  data-slider-value="5"/></span>
                                </p>
                                <p class="form-submit text-center">
                                    <button class="flat-button">Search <i class="ion-ios-search-strong"></i></button>
                                </p>
                            </form>
                        </div>
                        <div class="widget widget-map"><h5 class="widget-title">Map</h5>
                            <p>Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie.</p>
                            <div class="flat-maps">
                                <div class="maps" style="width: 100%; height: 359px; "></div>
                            </div>
                        </div>
                    </div><!-- /.sidebar --></div>
                <!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

@endsection
