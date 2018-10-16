@extends('layouts.app')

@section('content')
    <div id="main">
        <div class="container">
            <div class="row main-row">
                <div class="col-12 col-12-medium">

                    <section>
                        <h2>Who are you guys?</h2>
                        <ul class="small-image-list">
                            @foreach ($users as $user)
                                <li>
                                    <a href="#">
                                        <img src="{{$user->head_image}}" alt="" class="left" />
                                    </a>
                                    <p> {{  $user->introduce }}<br>
                                        微信： {{substr_replace($user->wechat,"****",2,5)}}
                                        QQ: {{substr_replace($user->qq,"****",2,5)}}
                                        邮件： {{substr_replace($user->email,"****",2,5)}}}  <br>
                                    </p>

                                </li>
                            @endforeach
                        </ul>
                    </section>

                   {{-- <section>
                        <h2>How about some links?</h2>
                        <div>
                            <div class="row">
                                <div class="col-6 col-12-small">
                                    <ul class="link-list">
                                        <li><a href="#">Sed neque nisi consequat</a></li>

                                    </ul>
                                </div>
                                <div class="col-6 col-12-small">
                                    <ul class="link-list">
                                        <li><a href="#">Quis accumsan lorem</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>--}}

                </div>

            </div>
        </div>
    </div>
@endsection
