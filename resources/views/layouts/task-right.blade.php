<div class="col-lg-3">
    <div class="sidebar">
        <div class=" widget widget-form style2">
            <h5 class="widget-title"> Search Box</h5>
            <form novalidate="" class="filter-form clearfix" id="filter-form" method="get" action="{{ url('/tasks')  }}">
                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                <p class="book-notes">
                    <input type="text" placeholder="What are you looking for?" name="title" required="" />
                </p>
                <p class="book-form-select icon">
                    <select class="dropdown_sort" name="type_id">
                        <option value="">Please choose the type</option>
                        @foreach ($types as $key=>$type)
                        <option value="{{$key}}">{{$type}}</option>
                        @endforeach
                    </select>
                    <i class="fa fa-angle-down">

                    </i>
                </p>
                <p class="book-form-select icon">
                    <select class="dropdown_sort" name="country_id">
                        <option value="">Please select your country</option>
                        @foreach ($countries as $key=>$country)
                            <option value="{{$country->id}}">{{$country->country_name}}</option>
                        @endforeach
                    </select>
                    <i class="fa fa-angle-down">

                    </i>
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
