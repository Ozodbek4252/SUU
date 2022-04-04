<header id="page-topbar">
    <div class="navbar-header">
        <div class="header-src">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="/" class="logo logo-dark">
                    {{--<x-jet-application-mark class="block h-9 w-auto" />--}}
                </a>

                <a href="/" class="logo logo-light">
                    {{--<x-jet-application-mark class="block h-9 w-auto" />--}}
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="d-flex align-items-center">
            <div class="dropdown d-none d-lg-inline-block ms-1" style="margin-right: 5px;">
                <span>Sana</span>
                <p style="margin-bottom: 0;">{{ \Carbon\Carbon::now()->format('d.m.Y') }}</p>
            </div>
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="uil-minus-path"></i>
                </button>
            </div>
            <div class="dropdown d-inline-block mr-5 ml-5">
                <div class="sun">
                    <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked
                           style="display: none"/>
                    <label class="form-check-label btn header-item noti-icon waves-effect" for="light-mode-switch"><i
                            class="uil-sun" style="top: 20%; position: relative;"></i></label>
                </div>
                <div class="moon" style="display: none">
                    <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                           style="display: none"/>
                    <label class="form-check-label btn header-item noti-icon waves-effect" for="dark-mode-switch"><i
                            class="uil-moon" style="top: 20%; position: relative;"></i></label>
                </div>
            </div>
            @php($user = auth()->user())
            <div class="dropdown d-inline-block">
                @if($user)
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">{{ $user->name }}</span>
                    <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                </button>
                @endif

                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('profile.show', app()->getLocale()) }}"><i
                            class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span
                            class="align-middle">Профиль</span></a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span
                            class="align-middle">Выход</span></a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>


        </div>
    </div>
</header>
