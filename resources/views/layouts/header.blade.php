<header id="header" class="header clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div id="logo" class="logo float-left">
                    <a href="/" rel="home">
                       <h1>Logo</h1>
                    </a>
                </div>
                <!-- /.logo -->
                <div class="btn-menu">
                    <span></span>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-8">
                <div class="nav-wrap">
                    <nav id="mainnav" class="mainnav float-left">
                        <ul class="menu">
                            <li class="{{ Request::is('/') ? 'home' : '' }}"><a href="/">首页</a></li>

                            {{--<li class="{{ Request::is('/articles') ? 'home' : '' }}"><a href="/articles">Articles</a>--}}

                            <li class="{{ Request::is('/users') ? 'home' : '' }}"><a href="/users">用户</a>

                            <li class="{{ Request::is('/videos') ? 'home' : '' }}"><a href="/videos">视频</a>

                            @auth
                                <li class="{{ Request::is('user/profile') ? 'home' : '' }}">
                                    <a   href="{{ url('user/profile') }}"  >
                                         个人中心 </a>
                                </li>
                                <li>
                                    <a   href="{{ url('logout') }}"  > 退出  </a>
                                </li>
                            @endauth

                            @guest
                                <li>
                                    <a data-toggle="modal" href="#popup_login">
                                        <i class="fa fa-user"></i>
                                        登录
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="modal" href="#popup_register">
                                        <i class="fa fa-user-plus"></i>
                                        注册
                                    </a>
                                </li>
                            @endguest

                        </ul>
                    </nav>

                </div>

            </div>

        </div>

    </div>
</header>
