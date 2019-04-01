@extends('layouts.app')

@section('content')
    @include('layouts.banner')
    <section class="main-content blog-posts blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="post-wrap">
                        <article class="post clearfix">
                            <div class="featured-post"><img src="/images/blog/4.jpg" alt="image"></div>
                            <!-- /.feature-post -->
                            <div class="content-post">
                                <h3 class="title-post">
                                    overdraft
                                </h3>
                                <ul class="meta-post clearfix">
                                    <li class="time"> January 22, 2017</li>
                                    <li class="categories"><a href="blog-single.html#">Business</a>, <a
                                            href="blog-single.html#">Leasing</a></li>
                                </ul><!-- /.meta-post -->
                                <div class="entry excerpt">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident, sunt in culpa qui
                                        officia deserunt mollit anim id est laborum.</p>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will give you a complete account of the system, and
                                        expound the actual teachings of the great explorer of the truth, the
                                        master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
                                        itself, because it is pleasure, but because those who do not know how to pursue
                                        pleasure rationally encounter consequences that are extremely painful. Nor again
                                        is there anyone who loves or pursues or desires to obtain pain of itself,
                                        because it is pain, but because occasionally circumstances occur in which toil
                                        and pain can procure him some great pleasure.</p>
                                    <ul class="list-single">
                                        <li>Customer experience, which includes the impression the homepage and overall
                                            design style give the their satisfaction when they interact with the site
                                            and perform tasks.
                                        </li>
                                        <li>Service-level, which looks at responsiveness and reliability of websites –
                                            scores them on how quickly they respond to user commands and such factors as
                                            average downtime.
                                        </li>
                                        <li>Best practices, such as ease of use, quality, availability and security –
                                            site managers must be compliant data laws requiring them to protect customer
                                            information and the integrity of customer accounts.
                                        </li>
                                    </ul>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                        excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                        officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                                        rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis
                                        est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
                                        possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p></div>
                                <div class="direction clearfix">
                                    <div class="tag-single float-left"><span>Tags:</span><a href="blog-single.html#">Business,</a><a
                                            href="blog-single.html#">Tax,</a><a href="blog-single.html#">Finance</a></div>
                                    <div class="social-links float-right"><span>Share:</span><a
                                            href="blog-single.html#"><i class="fa fa-facebook"></i></a><a
                                            href="blog-single.html#"><i class="fa fa-twitter"></i></a><a
                                            href="blog-single.html#"><i class="fa fa-google-plus"></i></a></div>
                                </div>
                            </div><!-- /.content-post -->
                        </article>

                    </div>
                    <!-- /.post-wrap -->
                </div>
                <!-- /.col-lg-9 -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="widget widget-recent-news"><h5 class="widget-title">Recent Post</h5>
                            <ul class="popular-news clearfix">
                                <li>
                                    <div class="text"><h6><a href="blog-single.html#">Why Do I Need To Use Financial
                                                ?</a></h6>
                                        <p>January 11, 2017</p></div>
                                </li>
                                <li>
                                    <div class="text"><h6><a href="blog-single.html#"> Why your sales forecast is
                                                off</a></h6>
                                        <p>January 11, 2017</p></div>
                                </li>
                                <li>
                                    <div class="text"><h6><a href="blog-single.html#"> 6 tips to retain your top sales
                                                talent</a></h6>
                                        <p>January 11, 2017</p></div>
                                </li>
                                <li>
                                    <div class="text"><h6><a href="blog-single.html#"> What the martian can teach
                                                sales</a></h6>
                                        <p>January 11, 2017</p></div>
                                </li>
                            </ul><!-- /.popular-news --></div><!-- /.widget-popular-news -->
                        <div class="widget widget_categories"><h5 class="widget-title">Category</h5>
                            <ul>
                                <li><a href="blog-single.html#">Business</a></li>
                                <li><a href="blog-single.html#">Finanve</a></li>
                                <li><a href="blog-single.html#">Insurance</a></li>
                                <li><a href="blog-single.html#">Leasing</a></li>
                            </ul>
                        </div><!-- /.widget-categories -->
                        <div class="widget widget_tag"><h5 class="widget-title">Tags</h5>
                            <div class="tag-list"><a href="blog-single.html#">Business</a><a href="blog-single.html#">Consulting</a><a
                                    href="blog-single.html#">Finanve</a><a href="blog-single.html#">Insurance</a><a
                                    href="blog-single.html#">Management</a><a href="blog-single.html#">Portfolio</a></div>
                        </div><!-- /.widget-tag --></div><!-- /.sidebar --></div><!-- /.col-md-3 --></div><!-- /.row -->
        </div><!-- /.container --></section>
    <section class="flat-row v1 bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-section"><h1 class="title">Newsletter</h1>
                        <div class="sub-title">Subscribe now and receive weekly newsletter with</div>
                    </div>
                    <form id="subscribe-form" class="flat-mailchimp" method="post" action="blog-single.html#"
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
    </section><!-- Footer -->
@endsection


