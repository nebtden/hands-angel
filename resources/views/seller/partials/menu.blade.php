

<li>
    <a href="{{ url('user/tasks') }}"><i class="fa fa-shopping-bag"></i>
        <span>个人需求</span>
    </a>
</li>


<li>
    <a href="/user/message/{{ Seller::user()->id }}/edit"><i class="fa fa-usd"></i>
        <span>个人信息</span>
    </a>
</li>


<li>
    <a href="/user/setting/{{ Seller::user()->id }}/edit"><i class="fa fa-gears"></i>
        <span>密码设置</span>
    </a>
</li>
<li>
    <a href="{{url('seller/faq') }}"><i class="fa fa-question"></i>
        <span>@lang('seller.FAQ')</span>
    </a>
</li>



