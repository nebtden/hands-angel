<div id="header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <header id="header">
                    <h1><a href="/" id="logo">Minimaxing</a></h1>
                    <nav id="nav">
                        <a href="/"  >主页</a>
                        <a href="/vpn"  >说明</a>
                        <a href="/users"  >用户列表</a>
                        <a href="/vpn"  >后台招聘</a>

                        @auth
                            <a href="{{ url('/home') }}">控制面板</a>
                        @else
                            <a href="{{ route('login') }}">登陆</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">注册</a>
                            @endif
                        @endauth

                    </nav>
                </header>

            </div>
        </div>
    </div>
</div>
