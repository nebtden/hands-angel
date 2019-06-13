<section class="flat-row v1 bg-theme">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-section">
                    <h1 class="title">邮件订阅</h1>
                    <div class="sub-title">
                        只需留下你的邮件，当有重大更新或者域名替换的时候，可第一时间接收通知。。！！
                    </div>
                </div>
                <form id="subscribe-form" class="flat-mailchimp" method="post" action="#"  data-mailchimp="true">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="field clearfix" id="subscribe-content">
                        <p class="wrap-input-email">
                            <input type="text" tabindex="2" id="subscribe-email" name="email" placeholder="您的邮件" />
                        </p>
                        <p class="wrap-btn">
                            <button type="button" id="subscribe-button" class=" subscribe-submit effect-button" title="Subscribe now">提交 </button> </p>
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-31285819-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-31285819-3');
</script>



