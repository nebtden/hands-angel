<div class="col-lg-3">
    <div class="sidebar">
        <div class=" widget widget-form style2">
            <h5 class="widget-title">搜索框</h5>
            <form novalidate="" class="filter-form clearfix" id="filter-form" method="get" action="{{ url('/users')  }}">
                <p class="book-notes">
                    <input type="text" placeholder="用户名" name="name" required="" />
                </p>
                <p class="book-form-select icon">
                    <select class="dropdown_sort" name="性别">
                        <option value="0">请选择</option>
                        <option value="1">男</option>
                        <option value="2">女</option>
                    </select>
                    <i class="fa fa-angle-down"> </i>
                </p>

                 <p></p>
                <p class="form-submit text-center">
                    <button class="flat-button">搜索
                        <i class="ion-ios-search-strong"></i>
                    </button>
                </p>
            </form>
        </div>

    </div>
    <!-- /.sidebar -->
</div>
