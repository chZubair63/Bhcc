<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <link rel="icon" type="image/png" href="{{ asset('adminlte/imgs/BHCClogo.jpg') }}">

  <!-- Brand Logo -->
  <a href="/dashboard" class="brand-link">
    <img src="{{asset('adminlte/imgs/BHCClogo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">BHCC</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
          <a href="{{url('dashboard')}}" class="nav-link {{$dashb??''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview {{$userm??''}}">
          <a href="#" class="nav-link {{$umanagement??''}}">
            <i class="nav-icon fas fa-user"></i>
            <p>
              User Management
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('users')}}" onclick="showLoading()" class="nav-link {{$muser??''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Users</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('roles')}}" onclick="showLoading()" class="nav-link {{$mrole??''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Roles</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('permissions')}}" onclick="showLoading()" class="nav-link {{$mperm??''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Permissions</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview {{$userm??''}}">
          <a href="#" class="nav-link {{$umanagement??''}}">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Website CMS
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('/careers-list')}}" onclick="showLoading()" class="nav-link {{$mcareers??''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Careers</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('/careers-list')}}" onclick="showLoading()" class="nav-link {{$mtenders??''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Tenders</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('/blogs')}}" onclick="showLoading()" class="nav-link {{$mblogs??''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Blogs</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview {{$userm??''}}">
        </li>
      </ul>
    </nav>
  </div>
</aside>