  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name') }}3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/users" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Users
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-football-ball"></i>
              <p>
                Games Leagues
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/leagues" class="nav-link">
                  <i class="far fa fa-plus-circle"></i>
                  <p>Add Leagues</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('leagues.all') }}" class="nav-link">
                  <i class="far fa fa-eye"></i>
                  <p>Manage Leagues</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Categories
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Categories/All" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/Categories" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Categories</p>
                </a>
              </li>
            </ul>
          </li>
          <!--end categories-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Viewers
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/viewers" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Viewers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/Allviewers" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Viewers</p>
                </a>
              </li>
            </ul>
          </li>
          <!--end viewers-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Games
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/AddGames" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Games</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/AllGames" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Games</p>
                </a>
              </li>
            </ul>
          </li>
          <!--End games-->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>