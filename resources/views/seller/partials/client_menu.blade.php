
<li>
    <a href="{{url('seller/waybill') }}"><i class="fa fa-home"></i>
        <span>@lang('seller.Order_List')</span>
    </a>
</li>
<li>
    <a href="{{ url('seller/freight') }}"><i class="fa fa-plane"></i>
        <span>@lang('seller.Freight')</span>
    </a>
</li>
<li>
    <a href="{{ url('seller/waybill-settlement') }}"><i class="fa fa-money"></i>
        <span>@lang('seller.waybill_settlement')</span>
    </a>
</li>
{{--<li>
    <a href="{{url('seller/freight') }}"><i class="fa fa-bars"></i>
        <span>派送费</span>
    </a>
</li>--}}
{{--<li>--}}
    {{--<a href="{{url('seller/transaction') }}"><i class="fa fa-usd"></i>--}}
        {{--<span>@lang('seller.Transaction')</span>--}}
    {{--</a>--}}
{{--</li>--}}


<li>
    <a href="/seller/setting/{{ Seller::user()->id }}/edit"><i class="fa fa-gears"></i>
        <span>@lang('seller.Reset Password')</span>
    </a>
</li>


{{--<li class="treeview">--}}
{{--<a href="#">--}}
{{--<i class="fa {{$item['icon']}}"></i>--}}
{{--<span>{{$item['title']}}</span>--}}
{{--<i class="fa fa-angle-left pull-right"></i>--}}
{{--</a>--}}
{{--<ul class="treeview-menu">--}}
{{--@foreach($item['children'] as $item)--}}
{{--@include('admin.partials.menu', $item)--}}
{{--@endforeach--}}
{{--</ul>--}}
{{--</li>--}}

