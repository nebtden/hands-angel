<div class="col-lg-3">
    <div class="sidebar">
        <div class=" widget widget-form style2">
            <h5 class="widget-title"> Search Box</h5>
            <form novalidate="" class="filter-form clearfix" id="filter-form" method="post" action="listing-list.html#">
                <p class="book-notes"><input type="text" placeholder="What are you looking for?" name="question" required="" /> </p>
                <p class="book-form-select icon">
                    <select class=" dropdown_sort">
                        @foreach ($types as $key=>$type)
                        <option value="{{$key}}">{{$type}}</option>
                        @endforeach
                    </select>
                    <i class="fa fa-angle-down">

                    </i>
                </p>
                <p class="book-form-select icon">
                    <select class=" dropdown_sort" disabled>
                            <option value="44" selected>China</option>
                    </select>
                    <i class="fa fa-angle-down">
                    </i>
                </p>
                <p class="book-form-select icon">
                    <select class=" dropdown_sort">
                        @foreach ($provinces as $key=>$province)
                            <option value="{{$province->id}}">{{$province->name}}</option>
                        @endforeach
                    </select>
                    <i class="fa fa-angle-down">

                    </i>
                </p>

                <p class="form-submit text-center">
                    <button class="flat-button">Search <i class="ion-ios-search-strong"></i>
                    </button>
                </p>
            </form>
        </div>
    </div>
    <!-- /.sidebar -->
</div>
