<div class="col-lg-3">
    <div class="sidebar">
        <div class=" widget widget-form style2">
            <h5 class="widget-title"> Search Box</h5>
            <form novalidate="" class="filter-form clearfix" id="filter-form" method="get" action="{{ url('/tasks')  }}">
                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                <p class="book-notes">
                    <input type="text" placeholder="What are you looking for?" name="title" required="" />
                </p>



                <p class="form-submit text-center">
                    <button class="flat-button">
                        Search
                        <i class="ion-ios-search-strong"></i>
                    </button>
                </p>
            </form>
        </div>
    </div>
    <!-- /.sidebar -->
</div>
<style type="text/css">
    .sidebar .book-form-select select{
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;

        cursor: pointer;
        border: 1px solid #FFF;
        font-size: 15px;
        font-weight: 500;
        color: #FFF;
    }
</style>
