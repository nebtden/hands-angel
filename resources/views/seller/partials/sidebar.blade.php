<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            {{--<li class="header">{{ trans('admin::lang.menu') }}</li>--}}
            @if (Auth::user()->account_type==1)
                @include('seller.partials.client_menu')
            @else
                @include('seller.partials.menu')
                {{--<a href="{{ url('/register') }}">Register</a>--}}
            @endif

            {{--@each('admin.partials.menu', Admin::menu(), 'item')--}}

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
