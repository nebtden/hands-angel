@extends('layouts.app')

@section('content')
    <!-- Banner -->
    <div id="banner-wrapper">
        <div class="container">

            <div id="banner">
                <h2>每个人都有自己的舞台!</h2>
                <span>活在世上，不要太累，直面自己的人性，释放自己...</span>
            </div>

        </div>
    </div>
    <div id="main">
        <div class="container">
            <div class="row main-row">
                <div class="col-4 col-12-medium">

                    <section>
                        <h2>欢迎使用系统</h2>
                        <p>This is <strong>Minimaxing</strong>, a fully responsive HTML5 site template designed by <a href="http://twitter.com/ajlkn">AJ</a> and released for free by <a href="http://html5up.net">HTML5 UP</a>. It features
                            a simple, lightweight design, solid HTML5 and CSS3 code, and full responsive support for desktop, tablet, and small displays.</p>
                        <footer class="controls">
                            <a href="http://html5up.net" class="button">More cool designs ...</a>
                        </footer>
                    </section>

                </div>
                <div class="col-4 col-6-medium col-12-small">

                    <section>
                        <h2>Who are you guys?</h2>
                        <ul class="small-image-list">
                            @foreach ($first_articles as $article)


                                <li>
                                    <a href="{{url('article/detail',['id'=>$article->id])}}">
                                        <img src="{{$article->img}}" alt="" class="left" />
                                    </a>
                                    <h4><a href="{{url('article/detail',['id'=>$article->id])}}">{{$article->title}}</a></h4>

                                    {{--<p>{!! $article->content !!}</p>--}}
                                </li>
                            @endforeach

                        </ul>
                    </section>

                </div>
                <div class="col-4 col-6-medium col-12-small">

                    <section>
                        <h2>How about some links?</h2>
                        <div>
                            <div class="row">
                                <div class="col-12 col-12-small">
                                    <ul class="link-list">
                                        @foreach ($send_articles as $article)
                                        <li>
                                            <a href="{{url('article/detail',['id'=>$article->id])}}">
                                                {{$article->title}}
                                            </a>
                                        </li>

                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </section>

                </div>
                <div class="col-6 col-12-medium">

                    <section>
                        <h2>最新用户信息</h2>
                        <p>  </p>
                        <ul class="big-image-list">
                            @foreach ($users as $user)
                                <li>
                                    <a href="#">
                                        <img src="{{$user->head_image}}" alt="" class="left" />
                                    </a>
                                    <p> {{  $user->introduce }}  </p>
                                    <p>微信：{{ substr_replace($user->wechat,"****",2,5) }} </p>
                                    <p>QQ: {{substr_replace($user->qq,"****",2,5)}}</p>
                                    <p>邮件： {{substr_replace($user->email,"****",2,5)}}}</p>
                                </li>

                            @endforeach

                        </ul>
                    </section>

                </div>
                <div class="col-6 col-12-medium">

                    <article class="blog-post">
                        <h2>Just another blog post</h2>
                        <a class="comments" href="#">33 comments</a>
                        <a href="#"><img src="images/pic6.jpg" alt="" class="top blog-post-image" /></a>
                        <h3>Magna Gravida Dolore</h3>
                        <p>Aenean non massa sapien. In hac habitasse platea dictumst.
                            Maecenas sodales purus et nulla sodales aliquam. Aenean ac
                            porttitor metus. In hac habitasse platea dictumst. Phasellus
                            blandit turpis in leo scelerisque mollis. Nulla venenatis
                            ipsum nec est porta rhoncus. Mauris sodales sed pharetra
                            nisi nec consectetur. Cras elit magna, hendrerit nec
                            consectetur in, sollicitudin vitae justo. Cras amet aliquet
                            Aliquam ligula turpis, feugiat id fermentum malesuada,
                            rutrum eget turpis. Mauris sodales sed pharetra nisi nec
                            consectetur. Cras elit magna, hendrerit nec consectetur
                            in sollicitudin vitae.</p>
                        <footer class="controls">
                            <a href="#" class="button">Continue Reading</a>
                        </footer>
                    </article>

                </div>
            </div>
        </div>
    </div>
@endsection
