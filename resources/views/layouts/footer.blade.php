<section class="flat-row v1 bg-theme">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-section">
                    <h1 class="title">Newsletter</h1>
                    <div class="sub-title">
                        Subscribe now and receive newsletter with
                    </div>
                </div>
                <form id="subscribe-form" class="flat-mailchimp" method="post" action="#"  data-mailchimp="true">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="field clearfix" id="subscribe-content">
                        <p class="wrap-input-email">
                            <input type="text" tabindex="2" id="subscribe-email" name="email" placeholder="Your Email Here" />
                        </p>
                        <p class="wrap-btn">
                            <button type="button" id="subscribe-button" class=" subscribe-submit effect-button" title="Subscribe now">SUBSCRIBE </button> </p>
                    </div>
                    <div id="subscribe-msg"></div>
                </form>
            </div>

        </div>
    </div>
</section>

<footer class="footer footer-widgets">
    <!-- /.container -->
    <div class="container">
        <div class="bottom">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>Copyright © 2013. Designer by Themesflat .
                            All Rights
                            Reserved.
                        </p>
                    </div>
                </div><!-- /.col-md-12 -->

            </div>
        </div>
    </div>
</footer>


