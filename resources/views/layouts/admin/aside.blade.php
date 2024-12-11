<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->

    <a href="/login" class="brand-link">

      <img src="{{asset('adminlte/imgs/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"

           style="opacity: .8">

      <span class="brand-text font-weight-light">SHCC</span>

    </a>



    <!-- Sidebar -->

    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->

      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="image">

          <img src="../../adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

        </div>

        <div class="info">

          <a href="#" class="d-block">Alexander Pierce</a>

        </div>

      </div> -->



      <!-- Sidebar Menu -->

      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Add icons to the links using the .nav-icon class

               with font-awesome or any other icon font library -->

          <li class="nav-item has-treeview">

            <a href="{{url('dashboard')}}" class="nav-link {{$dashb??''}}">

              <i class="nav-icon fas fa-tachometer-alt"></i>

              <p>

                Dashboard

                <!-- <i class="right fas fa-angle-left"></i> -->

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

          <li class="nav-item has-treeview ">

            <a href="#" class="nav-link {{$mcms??''}}">

              <i class="nav-icon fas fa-user"></i>

              <p>

 CMS
                <i class="fas fa-angle-left right"></i>

               

              </p>

            </a>

            <ul class="nav nav-treeview">

              

           




              <li class="nav-item">

                <a href="{{ url('schedules') }}" onclick="showLoading()" class="nav-link {{$mscedules??''}}">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Hospital Schedual</p>

                </a>

              </li>


              <li class="nav-item">

                <a href="{{url('departments')}}" onclick="showLoading()" class="nav-link {{$mdepartments??''}}">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Departments</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="{{url('services')}}" onclick="showLoading()" class="nav-link {{$mperm??''}}">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Services</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="{{url('slider')}}" onclick="showLoading()" class="nav-link {{$mperm??''}}">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Slider Images</p>

                </a>

              </li>



              <li class="nav-item">

                <a href="{{url('founder')}}" onclick="showLoading()" class="nav-link {{$mperm??''}}">

                  <i class="far fa-circle nav-icon"></i>

                  <p>founder</p>

                </a>

              </li>






              <li class="nav-item">

                <a href="{{url('doctors')}}" onclick="showLoading()" class="nav-link {{$mperm??''}}">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Doctors</p>

                </a>

              </li>




              <li class="nav-item">

                <a href="{{url('Management')}}" onclick="showLoading()" class="nav-link {{$mperm??''}}">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Mangement</p>

                </a>

              </li>


              <li class="nav-item">

                <a href="{{url('managingpartners')}}" onclick="showLoading()" class="nav-link {{$mperm??''}}">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Managing Partners</p>

                </a>

              </li>


              <li class="nav-item">

                <a href="{{url('blogs')}}" onclick="showLoading()" class="nav-link {{$mperm??''}}">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Blogs</p>

                </a>

              </li>



              <li class="nav-item">

                <a href="{{url('corevalues')}}" onclick="showLoading()" class="nav-link {{$mperm??''}}">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Core Values</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="{{url('indextop')}}" onclick="showLoading()" class="nav-link {{$mperm??''}}">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Index Top</p>

                </a>

              </li>


        

    

            </ul>

          </li>
        </li>

  


        

        </ul>

      </nav>

      <!-- /.sidebar-menu -->

    </div>

    <!-- /.sidebar -->

  </aside>