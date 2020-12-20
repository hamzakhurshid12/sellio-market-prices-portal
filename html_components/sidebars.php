<?php 
$pathPrefix="";
if ($pageName!="Dashboard"){
  $pathPrefix="../";
}
?>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="https://nyphone.net/assets/frontend/images/logo.png" alt="NyPhone Logo">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Site Visits
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $pathPrefix?>site_visits/day.php" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>Last 24 Hours</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $pathPrefix?>site_visits/week.php" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>Last 7 Days</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $pathPrefix?>site_visits/month.php" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>Last 30 Days</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $pathPrefix?>site_visits/all.php" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>All Records</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Visits Count Per IP
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $pathPrefix?>visits_per_ip/day.php" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>Last 24 Hours</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $pathPrefix?>visits_per_ip/week.php" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>Last 7 Days</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $pathPrefix?>visits_per_ip/month.php" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>Last 30 Days</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $pathPrefix?>visits_per_ip/all.php" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>All Records</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?php echo $pathPrefix?>logout.php" class="nav-link">
            <i class="fa fa-sign-out-alt nav-icon"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>