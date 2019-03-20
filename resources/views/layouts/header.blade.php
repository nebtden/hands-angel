<header id="header" class="header clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div id="logo" class="logo float-left"><a href="/" rel="home"><img src="/images/logo.png"
                                                                                            alt="image"></a></div>
                <!-- /.logo -->
                <div class="btn-menu"><span></span></div><!-- //mobile menu button --></div><!-- /.col-lg-4 -->
            <div class="col-lg-8">
                <div class="nav-wrap">
                    <nav id="mainnav" class="mainnav float-left">
                        <ul class="menu">
                            <li class="{{ Request::is('/') ? 'home' : '' }}"><a href="/">Home</a></li>

                            <li class="{{ Request::is('/article/list') ? 'home' : '' }}"><a href="/article/list">Articles</a>
                            <li class="{{ Request::is('/user-list') ? 'home' : '' }}"><a href="/user-list">Users</a>

                            @auth
                                <li class="{{ Request::is('user/profile') ? 'home' : '' }}">
                                    <a   href="{{ url('user/profile') }}"  >
                                         Profile </a>
                                </li>
                            @endauth

                            @guest
                                <li>
                                    <a data-toggle="modal" href="{{ url('login') }}">
                                        <i class="fa fa-user"></i>Sign in
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="modal" href="{ url('register') }}">
                                        <i class="fa fa-user-plus"></i>
                                        Register</a>
                                </li>
                            @endguest

                        </ul><!-- /.menu -->
                    </nav>
                    <!-- /.mainnav -->
                    <div class="button-addlist float-right">
                        <button type="button" class="flat-button" onclick="location.href='page-addlisting.html'">Add
                            Listing
                        </button>
                    </div>
                </div>
                <!-- /.nav-wrap -->
            </div>
            <!-- /.col-lg-8 -->
        </div>
        <!-- /.row -->
    </div>
</header>
