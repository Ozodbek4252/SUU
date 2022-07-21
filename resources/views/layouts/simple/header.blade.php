<header id="page-topbar">
  <div class="navbar-header">
    <div class="d-flex">
      <!-- LOGO -->
      <div class="navbar-brand-box">
        <a href="{{ Route('dashboard') }}" class="logo logo-dark">
          <span class="logo-sm">
            <img src="/assets/images/logo-sm.png" alt="" height="22" style="height: 22px;">
          </span>
          <span class="logo-lg">
            <img src="/assets/images/logo-dark.png" alt="" height="20" style="height: 20px;">
          </span>
        </a>

        <a href="{{ Route('dashboard') }}" class="logo logo-light">
          <span class="logo-sm">
            <img src="/assets/images/logo-sm.png" alt="" height="22" style="height: 22px;">
          </span>
          <span class="logo-lg">
            <img src="/assets/images/logo-light.png" alt="" height="20" style="height: 20px;">
          </span>
        </a>
      </div>

      <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
      </button>

      <!-- App Search-->
      <form class="app-search d-none d-lg-block">
        <div class="position-relative">
          <input type="text" class="form-control" placeholder="Search...">
          <span class="uil-search"></span>
        </div>
      </form>
    </div>

    <div class="d-flex">

      <div class="dropdown d-inline-block d-lg-none ms-2">
        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="uil-search"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

          <form class="p-3">
            <div class="m-0">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="dropdown d-inline-block language-switch">
        <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <img src="/assets/images/flags/us.jpg" alt="Header Language" height="16" style="height: 16px;">
        </button>
        <div class="dropdown-menu dropdown-menu-end">

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <img src="/assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"
              style="height: 12px;"> <span class="align-middle">Spanish</span>
          </a>

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <img src="/assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"
              style="height: 12px;"> <span class="align-middle">German</span>
          </a>

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <img src="/assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"
              style="height: 12px;"> <span class="align-middle">Italian</span>
          </a>

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <img src="/assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"
              style="height: 12px;"> <span class="align-middle">Russian</span>
          </a>
        </div>
      </div>


      <div class="dropdown d-none d-lg-inline-block ms-1">
        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
          <i class="uil-minus-path"></i>
        </button>
      </div>

      <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="uil-bell"></i>
          <span class="badge bg-danger rounded-pill">3</span>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
          aria-labelledby="page-header-notifications-dropdown">
          <div class="p-3">
            <div class="row align-items-center">
              <div class="col">
                <h5 class="m-0 font-size-16"> Notifications </h5>
              </div>
              <div class="col-auto">
                <a href="index.html#!" class="small"> Mark all as read</a>
              </div>
            </div>
          </div>
          <div data-simplebar style="max-height: 230px;">
            <a href="index.html" class="text-reset notification-item">
              <div class="d-flex align-items-start">
                <div class="flex-shrink-0 me-3">
                  <div class="avatar-xs">
                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                      <i class="uil-shopping-basket"></i>
                    </span>
                  </div>
                </div>
                <div class="flex-grow-1">
                  <h6 class="mb-1">Your order is placed</h6>
                  <div class="font-size-12 text-muted">
                    <p class="mb-1">If several languages coalesce the grammar</p>
                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                  </div>
                </div>
              </div>
            </a>
            <a href="index.html" class="text-reset notification-item">
              <div class="d-flex align-items-start">
                <div class="flex-shrink-0 me-3">
                  <img src="/assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                </div>
                <div class="flex-grow-1">
                  <h6 class="mb-1">James Lemire</h6>
                  <div class="font-size-12 text-muted">
                    <p class="mb-1">It will seem like simplified English.</p>
                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                  </div>
                </div>
              </div>
            </a>
            <a href="index.html" class="text-reset notification-item">
              <div class="d-flex align-items-start">
                <div class="flex-shrink-0 me-3">
                  <div class="avatar-xs">
                    <span class="avatar-title bg-success rounded-circle font-size-16">
                      <i class="uil-truck"></i>
                    </span>
                  </div>
                </div>
                <div class="flex-grow-1">
                  <h6 class="mb-1">Your item is shipped</h6>
                  <div class="font-size-12 text-muted">
                    <p class="mb-1">If several languages coalesce the grammar</p>
                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                  </div>
                </div>
              </div>
            </a>

            <a href="index.html" class="text-reset notification-item">
              <div class="d-flex align-items-start">
                <div class="flex-shrink-0 me-3">
                  <img src="/assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                </div>
                <div class="flex-grow-1">
                  <h6 class="mb-1">Salena Layfield</h6>
                  <div class="font-size-12 text-muted">
                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="p-2 border-top">
            <div class="d-grid">
              <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                <i class="uil-arrow-circle-right me-1"></i> View More..
              </a>
            </div>
          </div>
        </div>
      </div>

      
      <div class="dropdown" style="display: flex; justify-content: center; align-items: center;">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <x-jet-dropdown-link href="{{ route('logout') }}"
            onclick="event.preventDefault();
                                    this.closest('form').submit();">
            <i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i>
            {{ __('Log Out') }}
          </x-jet-dropdown-link>
        </form>
      </div>


    </div>
  </div>
</header>
