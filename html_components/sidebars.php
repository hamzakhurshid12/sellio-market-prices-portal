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
        <a href="<?php echo $pathPrefix?>index.php" class="nav-link">Home</a>
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
    <a href="<?php echo $pathPrefix?>index.php" class="brand-link">
      <center><img width=150 height=150 src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEhUQExIVERUWGBYXFRcXGRgWFhgXGBgYGBcXFxYaIighGBolHhUWITEhJSorLi4uGCAzODMtNygtLisBCgoKDg0OGxAQGy0mICYyLTMvMC0tLS0tLS0tLS0tLS0yLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABgcEBQgBAwL/xABJEAABAwIDBAYDDAgFBAMAAAABAAIDBBEFEiEGBzFBEyJRYXGBFDKRCCM1QlJyc3SSobKzMzRiorHB0fAXJFOCkxZD0tMVRFT/xAAZAQEAAwEBAAAAAAAAAAAAAAAAAQMEAgX/xAAwEQACAQIEAwcDBAMAAAAAAAAAAQIDERIhMUEEUWETMnGBkaHRFMHwIrHh8SNCYv/aAAwDAQACEQMRAD8AvFERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAReEpdAeoiIAiIgCIiAIiIAiIgCIiAKsdrd8lJSSup4onVcjDZ5a4MjaRxaH2OYjuFu9S/bqskhw6rljJD2QSFpHFpynrDw4+S48cgOltj98FJWStgkjdSSPIDMzg+NzjwbnAFnHlca3srMXDwNtRouydkat8tFSzSevJBC93znMBKA3CIiAIiIAiIgCIiAIiIDwlU3vF3w9BI+loA172ktkmd1mtcNC2NvBxHadNOBU53o4u+lwupmjJD8oY0jiDI4MzDvAcT5LkklAbzFdrq+oJM1ZO+/LOWs8mNs0eQWqFbKDfpH37cxupnu03fvxR7yZOhhisHuAzOLnXIa0cOAuSe7irNO4Sgt+s1V+28dvZk/mgKawjbfEaYgxVkwt8VzjIz7D7j7lb2wm+iOYtgr2tgedBM3SInlnB/R+PDwUU2u3L1VM101K8VjBclgblmA7m6h/Phr3FRfYTYapxKUtjHRxNNpZnDqt/ZHyn93tsgOsmuB4ar9rVbPYQykp4qWNz3siaGtL3ZnHxP8hoBY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" alt="Sellio Market Logo"></center>
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
                Products
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $pathPrefix?>products/all.php" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>All Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $pathPrefix?>products/products_by_site.php" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>Products By Site</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $pathPrefix?>products/add_product.php" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Manufacturers
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $pathPrefix?>manufacturers/all.php" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>All Manufacturers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $pathPrefix?>manufacturers/merge_manufacturer.php" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>Merge Manufacturers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $pathPrefix?>manufacturers/add_manufacturer" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>Add Manufacturer</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Prices
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $pathPrefix?>manufacturers/all.php" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>Price by Item Code</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $pathPrefix?>products/add_product.php" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>Merge Manufacturers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $pathPrefix?>manufacturers/add_manufacturer" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>Add Manufacturer</p>
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