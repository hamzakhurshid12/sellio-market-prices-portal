<?php include "validate_session.php" ?>
<?php
//Global Page Variables
$pageName = "Stats";
include "mysql_connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SellioMarket Prices Database | <?php echo $pageName ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  
<?php include "html_components/sidebars.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $pageName ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $pageName ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Stats</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <td>Total Products </td>
                    <td><?php 
                        $sql = "SELECT COUNT(*) as total FROM tb_products";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo $row["total"];
                            }
                        } else {
                            echo "0";
                        }
                        ?> 
                    </td>
                </tr>
                <tr>
                    <td>Individual Price Records </td>
                    <td><?php 
                        $sql = "SELECT COUNT(*) as total FROM tb_price";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo $row["total"];
                            }
                        } else {
                            echo "0";
                        }
                        ?> 
                    </td>
                </tr>
                <tr>
                    <td>Total Companies </td>
                    <td><?php 
                        $sql = "SELECT COUNT(*) as total FROM tb_company";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo $row["total"];
                            }
                        } else {
                            echo "0";
                        }
                        ?> 
                    </td>
                </tr>
                <tr>
                    <td>Total Manufacturers </td>
                    <td><?php 
                        $sql = "SELECT COUNT(*) as total FROM tb_manufacturer";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo $row["total"];
                            }
                        } else {
                            echo "0";
                        }
                        ?> 
                    </td>
                </tr>
                <tr>
                    <td>Total Branches </td>
                    <td><?php 
                        $sql = "SELECT COUNT(*) as total FROM tb_branch";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo $row["total"];
                            }
                        } else {
                            echo "0";
                        }
                        ?> 
                    </td>
                </tr>
                <tr>
                    <td>Total Images </td>
                    <td><?php 
                        $sql = "SELECT COUNT(*) as total FROM tb_images";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo $row["total"];
                            }
                        } else {
                            echo "0";
                        }
                        ?> 
                    </td>
                </tr>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        SellioMarket Prices Database Panel
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>


