<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="/" class="logo logo-dark">
            <x-jet-application-mark class="w-25 mt-3" />
        </a>

        {{--<a href="/" class="logo logo-light flex">--}}
        {{--<x-jet-application-mark class="block h-9 w-auto" />--}}
        {{--</a>--}}
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-water-glass"></i>
                        <span>Продукты</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{route('create')}}">Добавить</a></li>
                        <li><a href="{{route('list')}}">Лист</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/orders" >
                        <i class="uil-shopping-basket"></i>
                        <span>Заказы</span>
                    </a>
                </li>
                <li>
                    <a href="/messages" >
                        <i class="uil-envelope-alt"></i>
                        <span>Сообшении</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('report')}}" >
                        <i class="uil-water-glass"></i>
                        <span>Report</span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
