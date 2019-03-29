<header id="header" class="header clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div id="logo" class="logo float-left"><a href="/" rel="home"><img src="/images/logo.png"
                                                                                            alt="image"></a></div>
                <!-- /.logo -->
                <div class="btn-menu">
                    <span></span>
                </div><!-- //mobile menu button -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-8">
                <div class="nav-wrap">
                    <nav id="mainnav" class="mainnav float-left">
                        <ul class="menu">
                            <li class="{{ Request::is('/') ? 'home' : '' }}"><a href="/">Home</a></li>

                            <li class="{{ Request::is('/articles') ? 'home' : '' }}"><a href="/articles">Articles</a>
                            <li class="{{ Request::is('/tasks') ? 'home' : '' }}"><a href="/tasks">Tasks</a>
                            <li class="{{ Request::is('/users') ? 'home' : '' }}"><a href="/users">Users</a>

                            @auth
                                <li class="{{ Request::is('user/profile') ? 'home' : '' }}">
                                    <a   href="{{ url('user/profile') }}"  >
                                         Profile </a>
                                </li>
                            @endauth

                            @guest
                                <li>
                                    <a data-toggle="modal" href="#popup_login">
                                        <i class="fa fa-user"></i>Sign in
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="modal" href="#popup_register">
                                        <i class="fa fa-user-plus"></i>
                                        Register</a>
                                </li>
                            @endguest

                        </ul><!-- /.menu -->
                    </nav>
                    <!-- /.mainnav -->
                    <div class="button-addlist float-right">
                        <button type="button" class="flat-button" onclick="location.href='/user/add-task'">Add
                            Task
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
