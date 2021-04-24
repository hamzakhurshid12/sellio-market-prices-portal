<?php include "../validate_session.php" 
?>
<?php
//Global Page Variables
$pageName = "Products | Edit Products";
$selectedSiteName = "site1";
if(isset($_GET["sitename"])){
    $selectedSiteName = $_GET["sitename"];
}

if(!isset($_GET["itemCode"])){
    echo "Invalid arguments!";
    exit();
}
$itemCode = $_GET["itemCode"];

include "../mysql_connection.php";

$itemName = "";
$itemType = "";
$manufacturerID = "";
$unitQty = "";
$quantity = "";
$isWeighted = "";
$qtyPackage = "";
$itemState = "";
$manufacturerDescription = "";

$sql = "SELECT * FROM tb_products WHERE ItemCode='$itemCode'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $itemName = $row["ItemName"];
        $itemType = $row["ItemType"];
        $manufacturerID = $row["ManufacturerID"];
        $unitQty = $row["UnitQty"];
        $quantity = $row["Quantity"];
        $isWeighted = $row["BeIsWeighted"];
        $qtyPackage = $row["QtyInPackage"];
        $itemState = $row["ItemStatus"];
        $manufacturerDescription = $row["ManufacturerDescription"];
    }
} else {
    echo "No Data found for this ID";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SellioMarket Prices Database | <?php echo $pageName ?></title>

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
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
      <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Edit Products</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <form action="functions/edit.php" method="get">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">

                <div class="form-group">
                  <label>Item Code</label>
                  <input value=<?php echo "'$itemCode'"; ?> name="itemCode" class="form-control" style="width: 100%;" readonly required \>
                </div>

                <!-- /.form-group -->
                <div class="form-group">
                  <label>Item Name</label>
                  <input value=<?php echo "'$itemName'"; ?> name="itemName" class="form-control" style="width: 100%;" required \>
                </div>

                <!-- /.form-group -->
                <div class="form-group">
                  <label>Item Type</label>
                  <input value=<?php echo "'$itemType'"; ?> name="itemType" class="form-control" style="width: 100%;" required \>
                </div>

                <!-- /.form-group -->
                <div class="form-group">
                  <label>Manufacturer</label>
                  <select value=<?php echo "'$manufacturerID'"; ?> name="manufacturerID" class="form-control select2" style="width: 100%;" required >
                  <?php
                    $sql = "SELECT * FROM tb_manufacturer";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            if($row["ID"] == $manufacturerID){
                                echo "<option value='".$row["ID"]."' selected>".$row["Name"]."</option>";
                            } else {
                                echo "<option value='".$row["ID"]."'>".$row["Name"]."</option>";
                            }
                        }
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Unit Quantity</label>
                  <input value=<?php echo "'$unitQty'"; ?> name="unitQty" class="form-control" style="width: 100%;" required \>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">

              <div class="form-group">
                  <label>Quantity</label>
                  <input value=<?php echo "'$quantity'"; ?> name="quantity" class="form-control" style="width: 100%;" required \>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Is Weighted</label>
                  <select value=<?php echo "'$isWeighted'"; ?> name="isWeighted" class="form-control" style="width: 100%;" required >
                  <option value="0">No</option>
                  <option value="1">Yes</option>
                </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Quantity Package</label>
                  <input value=<?php echo "'$qtyPackage'"; ?> name="qtyPackage" class="form-control" style="width: 100%;" required \>
                </div>
                <!-- /.form-group -->
                <!--<div class="form-group">
                  <label>Item Price</label>
                  <input name="itemPrice" class="form-control select2" style="width: 100%;" required \>
                </div> -->
                <!-- /.form-group -->
                <!--<div class="form-group">
                  <label>Unit of Measure Price</label>
                  <input name="unitOfMeasurePrice" class="form-control select2" style="width: 100%;" required \>
                </div>-->
                <!-- /.form-group -->
                <!--<div class="form-group">
                  <label>Allow Discount</label>
                  <select name="allowDiscount" class="form-control select2" style="width: 100%;" required >
                  <option value="0">No</option>
                  <option value="1">Yes</option>
                </select>
                </div>-->
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Item State</label>
                  <input value=<?php echo "'$itemState'"; ?> name="itemState" class="form-control" style="width: 100%;" required \>
                </div>
                <!-- /.form-group -->
                <!--<div class="form-group">
                  <label>Site</label>
                  <select name="site" class="form-control select2" style="width: 100%;" required >
                  <?php
                    //$sql = "SELECT * FROM tb_company";
                    //$result = $conn->query($sql);
                    //if ($result->num_rows > 0) {
                    //    while($row = $result->fetch_assoc()) {
                    //        echo "<option value='".$row["ID"]."'>".$row["Name"]."</option>";
                    //    }
                    //}
                    ?>
                  </select>
                </div>-->
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              </div>
              <!-- /.col -->
              <div class="row">
              <div class="col-md-12">
              <div class="form-group">
                  <label>Manufacturer Description</label>
                  <textarea name="manufacturerDescription" class="form-control" style="width: 100%;"><?php echo $manufacturerDescription; ?></textarea>
                </div>
                <!-- /.form-group -->
                </div></div> 
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="Update" class="btn btn-primary">Submit</button>
          </div>
        </form>
        </div>
        <!-- /.card -->
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
<!-- Select2 -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../plugins/moment/moment.min.js"></script>
<!-- date-range-picker -->
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
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
    $('#reservationdate').datetimepicker();

    $('.select2').select2()

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