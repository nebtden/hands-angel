
<li>
    <a href="{{ url('user/articles') }}"><i class="fa fa-shopping-bag"></i>
        <span>文章</span>
    </a>
</li>

<li>
    <a href="{{ url('user/task') }}"><i class="fa fa-shopping-bag"></i>
        <span>任务</span>
    </a>
</li>


<li>
    <a href="{{url('user/message') }}"><i class="fa fa-usd"></i>
        <span>消息</span>
    </a>
</li>


<li>
    <a href="/user/setting/{{ Seller::user()->id }}/edit"><i class="fa fa-gears"></i>
        <span>设置</span>
    </a>
</li>
<li>
    <a href="{{url('seller/faq') }}"><i class="fa fa-question"></i>
        <span>@lang('seller.FAQ')</span>
    </a>
</li>



