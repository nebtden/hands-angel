
<li>
    <a href="{{ url('user/articles') }}"><i class="fa fa-shopping-bag"></i>
        <span>文章列表</span>
    </a>
</li>

<li>
    <a href="{{ url('user/task') }}"><i class="fa fa-shopping-bag"></i>
        <span>任务列表</span>
    </a>
</li>


<li>
    <a href="{{url('user/apply_log') }}"><i class="fa fa-usd"></i>
        <span>@lang('seller.Transaction')</span>
    </a>
</li>

<li class="treeview active">
    <a href="#">
        <i class="fa fa-bar-chart-o"></i>
        <span>@lang('seller.Statistics')</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu menu-open" style="display: block;">
        <li>
            <a href="{{url('seller/day') }}"><i class="fa fa-bar-chart-o"></i>
                <span>@lang('seller.Day') @lang('seller.Statistics')</span>
            </a>
        </li>
        <li>
            <a href="{{url('seller/week') }}"><i class="fa fa-bar-chart-o"></i>
                <span>@lang('seller.Week') @lang('seller.Statistics')</span>
            </a>
        </li>
        <li>
            <a href="{{url('seller/month') }}"><i class="fa fa-bar-chart-o"></i>
                <span>@lang('seller.Month') @lang('seller.Statistics')</span>
            </a>
        </li>

    </ul>
</li>

<li>
    <a href="/user/setting/{{ Seller::user()->id }}/edit"><i class="fa fa-gears"></i>
        <span>重置密码</span>
    </a>
</li>
<li>
    <a href="{{url('seller/faq') }}"><i class="fa fa-question"></i>
        <span>@lang('seller.FAQ')</span>
    </a>
</li>



