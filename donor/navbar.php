
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../dist/img/Favicon.png" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8">
      <span class="brand-text font-weight-light">Proteger</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
           <?php
                                        if ($pic != "") {

                                        ?>
                                            <img src="data:image/jpeg;base64,<?php echo $pic ?>" class="img-circle elevation-2">

                                        <?php
                                        } else {

                                        ?>

                                            <img src="../dist/img/avatar6.png" class="img-circle elevation-2">
                                        <?php
                                        }

            ?>
        </div>
        <div class="info">
          <a href="user_profile.php" class="d-block"><?php echo $username;?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
<!--       <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="user_dashboard.php" class="nav-link">
             <i class="nav-icon fab fa-dashcube"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-header">ACTIVITIES</li>
          <li class="nav-item">
            <a href="user_activity.php" class="nav-link">
             <i class=" nav-icon fas fa-poll-h"></i>
              <p>
                My Activity
              </p>
            </a>
          </li>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          
          <br>
          <br>
          <br>
          <br>
          




          <li class="nav-item">
            <a href="../config/logout-router.php" class="nav-link bg-danger">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Log-out</p>
            </a>
          </li>




        </ul>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>