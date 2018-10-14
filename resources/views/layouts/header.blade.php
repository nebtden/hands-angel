<div id="header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <header id="header">
                    <h1><a href="index.html" id="logo">Minimaxing</a></h1>
                    <nav id="nav">
                        <a href="/" class="current-page-item">主页</a>
                        <a href="/vpn" class="current-page-item">说明</a>
                        <a href="/vpn" class="current-page-item">后台招聘</a>
                        <a href="/vpn" class="current-page-item">vpn教程</a>
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth

                    </nav>
                </header>

            </div>
        </div>
    </div>
</div>
