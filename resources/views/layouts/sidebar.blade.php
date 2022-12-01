<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="{{asset('assets')}}/img/AstyShopLogo.png" alt="AdminLTE Logo" class="w-100">
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        @if ($userId == 1)
          <li class="nav-header">ADMIN</li>
          <li class="nav-item">
            <a href="/user" class="nav-link">
              <i class="nav-icon fa-solid fa-users-gear"></i>            
              <p>
                User
              </p>
            </a>
          </li>     
        @endif
        <li class="nav-header">DATA</li>
        <li class="nav-item">
          <a href="/order" class="nav-link">
            <i class="nav-icon fa-solid fa-clipboard-list"></i>            
            <p>
              Order
              <span class="badge badge-info right">{{ count($orders) }}</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/customer" class="nav-link">
            <i class="nav-icon fa-solid fa-users"></i>            
            <p>
              Customer
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/supplier" class="nav-link">
            <i class="nav-icon fa-solid fa-truck"></i>            
            <p>
              Supplier
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>