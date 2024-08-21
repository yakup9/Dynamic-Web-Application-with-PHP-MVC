  <style>
    #white{
      color: white;
    }
  </style>
  <aside style="background-color: black;" class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index.php" class="brand-link">
      <img src="dimg/admin/<?php echo $_SESSION['admin']['admin_file']; ?>" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
      <span id="white" class="brand-text font-weight-light"><?php echo $_SESSION['admin']['admin_file']; ?></span>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul id="white" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i id="white" class="fas fa-home nav-icon"></i>
              <p id="white">
                Home
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="slider.php" class="nav-link">
              <i id="white" class="fas fa-image nav-icon"></i>
              <p id="white">
                Slider
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="about.php" class="nav-link">
              <i id="white" class="fas fa-file nav-icon"></i>
              <p id="white">
                Kurumsal Sayfalar
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="blog.php" class="nav-link">
              <i id="white" class="fas fa-edit nav-icon"></i>
              <p id="white">
                Blog
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i id="white" class="nav-icon fas fa-cogs"></i>
              <p id="white">
                Kullanıcı İşlemleri
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="admin.php" class="nav-link">
                  <i id="white" class="fas fa-address-card nav-icon"></i>
                  <p id="white">Yöneticiler</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="user.php" class="nav-link">
                  <i id="white" class="fas fa-address-card nav-icon"></i>
                  <p id="white">Kullanıcılar</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i id="white" class="nav-icon fas fa-cogs"></i>
              <p id="white">
                SETTINGS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="settings.php" class="nav-link">
                  <i id="white" class="far fa-address-card nav-icon"></i>
                  <p id="white">Site Settings</p>
                </a>
              </li>
              
            </ul>
          </li>
         <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i id="white" class="fas fa-sign-out-alt nav-icon"></i>
              <p id="white">
                Çıkış
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
