<section class="flat-row section-product bg-theme">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section text-center"><h1 class="title">Most Visited</h1>
                    <div class="sub-title">Some great tasks you should not miss</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="wrap-flat-product clearfix">

                @foreach($tasks as $task)
                <div class="flat-product">
                    <div class="featured-product">
                        <img src="{{$task->cover}}" alt="image" width="361px" height="238px">

                        <div class="rate-product">
                            <div class="link-review clearfix">

                            </div>

                        </div>
                    </div>
                    <div class="content-product">
                        <div class="tm"> TM</div>
                        <div class="text">
                            <p>{{$task->title}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
