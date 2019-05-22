<section class="flat-row section-product bg-theme">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section text-center"><h1 class="title">用户精选</h1>
                    <div class="sub-title">注册之后，可以获取他们的联系方式！</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="wrap-flat-product clearfix">

                @foreach($users as $user)
                <div class="flat-product">
                    <div class="featured-product">
                        <a href="/users/{{$user->id}}">
                            <img src="{{$user->head_img}}" alt="image" width="361px" height="238px">
                        </a>

                        <div class="rate-product">
                            <div class="link-review clearfix">

                            </div>
                        </div>
                    </div>
                    <div class="content-product">
                        <div class="text">
                            <p>
                                <a href="/users/{{$user->id}}">
                                    {{$user->name}}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
