<div class="col-lg-3">
    <div class="sidebar">
        <div class=" widget widget-form style2">
            <h5 class="widget-title"> Search Box</h5>
            <form novalidate="" class="filter-form clearfix" id="filter-form" method="get" action="{{ url('/users')  }}">
                <p class="book-notes">
                    <input type="text" placeholder="Who are you looking for?" name="name" required="" />
                </p>
                <p class="book-form-select icon">
                    <select class="dropdown_sort" name="sex">
                        <option value="0">Please select the gender</option>
                        <option value="1">Man</option>
                        <option value="2">Woman</option>
                    </select>
                    <i class="fa fa-angle-down"> </i>
                </p>
                <p class="book-form-select icon">
                    <select class="dropdown_sort" name="country_id">
                        <option value="">Please select your country</option>
                        @foreach ($countries as $key=>$country)
                            <option value="{{$country->id}}">{{$country->country_name}}</option>
                        @endforeach
                    </select>
                    <i class="fa fa-angle-down"> </i>
                </p>


                 <p></p>
                <p class="form-submit text-center">
                    <button class="flat-button">Search
                        <i class="ion-ios-search-strong"></i>
                    </button>
                </p>
            </form>
        </div>

    </div>
    <!-- /.sidebar -->
</div>