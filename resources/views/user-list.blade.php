@extends('layouts.app')

@section('content')
    @include('layouts.banner')
   <section class="main-content page-listing">
       <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="listing-wrap">
                        <div class="content-listing">
                            <h3 class="title-listing">Our Menu</h3>
                            <div class="list-tab">
                                <div class="flat-tabs" data-effect="fadeIn">
                                    <ul class="menu-tab clearfix">
                                        <li class="active"><a href="#">Vegetarian</a></li>
                                        <li class=""><a href="#">Tacos</a></li>
                                        <li class=""><a href="#">Burritos</a></li>
                                        <li class=""><a href="#">Specialties</a></li>
                                        <li class=""><a href="#">Breakfast</a></li>
                                    </ul>
                                    <div class="content-tab">
                                        <div class="content-inner active">
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img
                                                            src="images/services/t1.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">Nellara</a>
                                                    </h5>
                                                    <p>Late evening craving for some comfort food led me to this place.
                                                        In this case, my humble state food puttu or steamed rice
                                                        cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$10.99</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img src="images/services/t2.jpg" alt=""></span></div>
                                                <div class="content-food float-left">
                                                    <h5><a href="listing-single.html#">Quesarito</a>
                                                    </h5>
                                                    <p>Late evening craving for some comfort food led me to this place. In this case, my humble state food puttu or steamed rice cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$2.49</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img src="images/services/t3.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">XXL Grilled Stuft Burrito</a></h5>
                                                    <p>Late evening craving for some comfort food led me to this place.
                                                        In this case, my humble state food puttu or steamed rice
                                                        cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$3.99</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img src="images/services/t4.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">Cantina
                                                            Power Burrito</a></h5>
                                                    <p>Late evening craving for some comfort food led me to this place.
                                                        In this case, my humble state food puttu or steamed rice
                                                        cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$3.79</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-inner">
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img src="images/services/t4.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">Cantina Power Burrito</a></h5>
                                                    <p>Late evening craving for some comfort food led me to this place. n this case, my humble state food puttu or steamed rice cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$7.99</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img src="images/services/t2.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">Quesarito</a>
                                                    </h5>
                                                    <p>Late evening craving for some comfort food led me to this place.
                                                        In this case, my humble state food puttu or steamed rice
                                                        cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$5.49</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img
                                                            src="images/services/t3.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">XXL
                                                            Grilled Stuft Burrito</a></h5>
                                                    <p>Late evening craving for some comfort food led me to this place.
                                                        In this case, my humble state food puttu or steamed rice
                                                        cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$14.99</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img
                                                            src="images/services/t1.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">Nellara</a>
                                                    </h5>
                                                    <p>Late evening craving for some comfort food led me to this place.
                                                        In this case, my humble state food puttu or steamed rice
                                                        cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$5.79</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-inner">
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img
                                                            src="images/services/t3.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">Nellara</a>
                                                    </h5>
                                                    <p>Late evening craving for some comfort food led me to this place.
                                                        In this case, my humble state food puttu or steamed rice
                                                        cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$15.99</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img
                                                            src="images/services/t2.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">Quesarito</a>
                                                    </h5>
                                                    <p>Late evening craving for some comfort food led me to this place.
                                                        In this case, my humble state food puttu or steamed rice
                                                        cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$2.49</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img
                                                            src="images/services/t1.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">XXL
                                                            Grilled Stuft Burrito</a></h5>
                                                    <p>Late evening craving for some comfort food led me to this place.
                                                        In this case, my humble state food puttu or steamed rice
                                                        cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$3.99</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img
                                                            src="images/services/t4.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">Cantina
                                                            Power Burrito</a></h5>
                                                    <p>Late evening craving for some comfort food led me to this place.
                                                        In this case, my humble state food puttu or steamed rice
                                                        cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$3.79</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-inner">
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img
                                                            src="images/services/t4.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">food
                                                            puttu</a></h5>
                                                    <p>Late evening craving for some comfort food led me to this place.
                                                        In this case, my humble state food puttu or steamed rice
                                                        cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$12.99</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img
                                                            src="images/services/t2.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">Quesarito</a>
                                                    </h5>
                                                    <p>Late evening craving for some comfort food led me to this place.
                                                        In this case, my humble state food puttu or steamed rice
                                                        cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$6.49</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img
                                                            src="images/services/t3.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">XXL
                                                            Grilled Stuft Burrito</a></h5>
                                                    <p>Late evening craving for some comfort food led me to this place.
                                                        In this case, my humble state food puttu or steamed rice
                                                        cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$3.99</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img
                                                            src="images/services/t4.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">Cantina
                                                            Power Burrito</a></h5>
                                                    <p>Late evening craving for some comfort food led me to this place.
                                                        In this case, my humble state food puttu or steamed rice
                                                        cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$3.79</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-inner">
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img
                                                            src="images/services/t1.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">Nellara</a>
                                                    </h5>
                                                    <p>Late evening craving for some comfort food led me to this place.
                                                        In this case, my humble state food puttu or steamed rice
                                                        cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$10.99</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img
                                                            src="images/services/t2.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">Quesarito</a>
                                                    </h5>
                                                    <p>Late evening craving for some comfort food led me to this place.
                                                        In this case, my humble state food puttu or steamed rice
                                                        cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$2.49</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img
                                                            src="images/services/t3.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">XXL
                                                            Grilled Stuft Burrito</a></h5>
                                                    <p>Late evening craving for some comfort food led me to this place.
                                                        In this case, my humble state food puttu or steamed rice
                                                        cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$3.99</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                            <div class="menu-food clearfix">
                                                <div class="featured-food float-left"><span class="effect"><img
                                                            src="images/services/t4.jpg" alt=""></span></div>
                                                <div class="content-food float-left"><h5><a href="listing-single.html#">Cantina
                                                            Power Burrito</a></h5>
                                                    <p>Late evening craving for some comfort food led me to this place.
                                                        In this case, my humble state food puttu or steamed rice
                                                        cake</p></div>
                                                <div class="rate-food float-right">
                                                    <div class="price">$3.79</div>
                                                    <div class="flat-start"><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                            class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.user-right')
            </div>

       </div>
   </section>



@endsection
