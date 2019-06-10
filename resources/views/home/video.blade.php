<section class="flat-row section-product bg-theme">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section text-center">
                    <div class="sub-title">最受欢迎的视频（注意，在pc上无法观看视频，请使用手机浏览器进行访问！）</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="wrap-flat-product clearfix">

                @foreach($videos as $video)
                <div class="flat-product video">
                    <div class="featured-product">
                        <a href="/video/{{$video->id}}">
                        <img src="{{$video->img}}" alt="image" >
                        </a>

                    </div>
                    <div class="content-product">

                        <div class="text">
                            <p>
                                <a href="/video/{{$video->id}}">
                                    {{$video->title}}
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
