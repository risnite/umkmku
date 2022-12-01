  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto align-items-center">
      
      <li class="nav-item dropdown user-panel d-flex align-items-center">
        <div class="image">
          <img src="{{asset('assets')}}/img/AstyShopLogo.png" alt="AdminLTE Logo" class="">
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
          {{ $user->name }}
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="/user/edit/{{ $user->id }}" class="dropdown-item">
            Edit Account
          </a>
          <form action="logout" method="POST">
            @csrf
            <button type="submit" class="dropdown-item">
              Log Out
            </button>
          </form>
        </div>
      </li>
    </ul>
  </nav>