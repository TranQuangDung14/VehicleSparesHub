<div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="#" class="text-nowrap logo-img">
        <img src="{{ asset('Admin/') }}/images/logos/dark-logo.svg" width="180" alt="" />
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Bảng điều khiển</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('dashboardIndex')}}" aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Sản phẩm</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('categoryIndex')}}" aria-expanded="false">
            <span>
              <i class="ti ti-article"></i>
            </span>
            <span class="hide-menu">Danh mục sản phẩm</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('productIndex')}}" aria-expanded="false">
            <span>
              <i class="ti ti-alert-circle"></i>
            </span>
            <span class="hide-menu">Quản lý Sản phẩm</span>
          </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Sản phẩm</span>
          </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="#" aria-expanded="false">
            <span>
              <i class="ti ti-cards"></i>
            </span>
            <span class="hide-menu">Quản lý đơn hàng</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="#" aria-expanded="false">
            <span>
              <i class="ti ti-file-description"></i>
            </span>
            <span class="hide-menu">Thống kê</span>
          </a>
        </li>
         <li class="sidebar-item">
          <a class="sidebar-link" href="#" aria-expanded="false">
            <span>
              <i class="ti ti-typography"></i>
            </span>
            <span class="hide-menu">Quản lý khách hàng</span>
          </a>
        </li>
         <li class="sidebar-item">
          <a class="sidebar-link" href="#" aria-expanded="false">
            <span>
              <i class="ti ti-typography"></i>
            </span>
            <span class="hide-menu">Quản lý Tài khoản</span>
          </a>
        </li>
       {{-- <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">AUTH</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="#" aria-expanded="false">
            <span>
              <i class="ti ti-login"></i>
            </span>
            <span class="hide-menu">Login</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="#" aria-expanded="false">
            <span>
              <i class="ti ti-user-plus"></i>
            </span>
            <span class="hide-menu">Register</span>
          </a>
        </li>
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">EXTRA</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="#" aria-expanded="false">
            <span>
              <i class="ti ti-mood-happy"></i>
            </span>
            <span class="hide-menu">Icons</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="#" aria-expanded="false">
            <span>
              <i class="ti ti-aperture"></i>
            </span>
            <span class="hide-menu">Sample Page</span>
          </a>
        </li> --}}
      </ul>
      {{-- <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
        <div class="d-flex">
          <div class="unlimited-access-title me-3">
            <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
            <a href="#" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
          </div>
          <div class="unlimited-access-img">
            <img src="{{ asset('Admin/') }}/images/backgrounds/rocket.png" alt="" class="img-fluid">
          </div>
        </div>
      </div> --}}
    </nav>
    <!-- End Sidebar navigation -->
  </div>
