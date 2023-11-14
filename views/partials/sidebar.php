 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SPACE ODYSSEY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User test</a>
        </div>
      </div>

     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?= urlIs('/dashboard') ? "menu-open" : "" ?>">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard              
              </p>
            </a>
          </li>
         
          <li class="nav-item <?= urlIs('/missions') ? "menu-open" : "" ?>">
            <a href="/missions" class="nav-link">
              <i class="nav-icon fas fa-sticky-note"></i>
              <p>
                Missions
              </p>
            </a>
          </li>
          <li class="nav-item <?= urlIs('/planets') ? "menu-open" : "" ?>">
            <a href="/planets" class="nav-link">
              <i class="nav-icon fas fa-globe" style="color: #fff  ;"></i>
              <p>
                Planets
              </p>
            </a>
            
          </li>
          <li class="nav-item <?= urlIs('/spaceships') ? "menu-open" : "" ?>">
            <a href="/spaceships" class="nav-link">
            <i class="nav-icon fas fa-solid fa-rocket"></i>
              <p>
              Spaceships
              </p>
            </a>
          
          </li>
          <li class="nav-item <?= urlIs('/astronauts') ? "menu-open" : "" ?>">
            <a href="/astronauts" class="nav-link">
            <i class="nav-icon fas fa-solid fa-globe fa-solid fa-user-astronaut"></i>
            
              <p>
              Astronauts
              </p>
            </a>
          
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
