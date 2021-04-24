<?php include "../validate_session.php" 
?>
<?php
//Global Page Variables
$pageName = "Products | By Site";
$selectedSiteName = "site1";
if(isset($_GET["sitename"])){
    $selectedSiteName = $_GET["sitename"];
}
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
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  
<?php include "../html_components/sidebars.php" ?>

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
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      <div class="row">
          <div class="col-12">
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Select Site</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="products_by_site.php" method="get">
                <div class="card-body">
                <div class="form-group">
                  <select class="custom-select form-control-border" id="siteSelector" name="sitename">
                    <option value="site1" <?php if($selectedSiteName=="site1"){echo "selected";} ?>>Site 1</option>
                    <option value="site2" <?php if($selectedSiteName=="site2"){echo "selected";} ?>>Site 2</option>
                    <option value="site2" <?php if($selectedSiteName=="site3"){echo "selected";} ?>>Site 3</option>
                  </select>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Results</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Date</th>
                    <th>Item Code</th>
                    <th>Item Name</th>
                    <th>Item Type</th>
                    <th>Manufacturer</th>
                    <th>Unit Quantity</th>
                    <th>Quantity</th>
                    <th>Unit Measure</th>
                    <th>Quantity in Package</th>
                    <th>Item Price</th>
                    <th>Unit of Measure Price</th>
                    <th>Site</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    include "../mysql_connection.php";
                    $current_time = time();
                    $start_time = 0;
                    $sql = "SELECT * FROM products WHERE site='".$selectedSiteName."'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>".$row["priceUpdateDate"]."</td>
                            <td>".$row["itemCode"]."</td>
                            <td>".$row["itemName"]."</td>
                            <td>".$row["itemType"]."</td>
                            <td>"."<a target='_blank' href=manufacturer.php?id='".$row["manufacturerName"]."'>View Details</a>"."</td>
                            <td>".$row["unitQty"]."</td>
                            <td>".$row["quantity"]."</td>
                            <td>".$row["unitMeasure"]."</td>
                            <td>".$row["qtyPackage"]."</td>
                            <td>".$row["itemPrice"]."</td>
                            <td>".$row["unitOfMeasurePrice"]."</td>
                            <td>".$row["site"]."</td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan=10 align=center>No Entries Found</td></tr>";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "order": [[ 2, "desc" ]]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    /*$('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });*/
  });
</script>

</body>
</html>