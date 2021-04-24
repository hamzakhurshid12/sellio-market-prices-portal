<?php include "../validate_session.php" 
?>
<?php
//Global Page Variables
$pageName = "Manufacturers | Merge Manufacturers";
$selectedSiteName = "site1";
if(isset($_GET["sitename"])){
    $selectedSiteName = $_GET["sitename"];
}
include "../mysql_connection.php";

$countriesList=array(array('Aruba','AW'),array('Afghanistan','AF'),array('Angola','AO'),array('Anguilla','AI'),array('Åland Islands','AX'),array('Albania','AL'),array('Andorra','AD'),array('United Arab Emirates','AE'),array('Argentina','AR'),array('Armenia','AM'),array('American Samoa','AS'),array('Antarctica','AQ'),array('French Southern Territories','TF'),array('Antigua and Barbuda','AG'),array('Australia','AU'),array('Austria','AT'),array('Azerbaijan','AZ'),array('Burundi','BI'),array('Belgium','BE'),array('Benin','BJ'),array('Bonaire, Sint Eustatius and Saba','BQ'),array('Burkina Faso','BF'),array('Bangladesh','BD'),array('Bulgaria','BG'),array('Bahrain','BH'),array('Bahamas','BS'),array('Bosnia and Herzegovina','BA'),array('Saint Barthélemy','BL'),array('Belarus','BY'),array('Belize','BZ'),array('Bermuda','BM'),array('Bolivia, Plurinational State of','BO'),array('Brazil','BR'),array('Barbados','BB'),array('Brunei Darussalam','BN'),array('Bhutan','BT'),array('Bouvet Island','BV'),array('Botswana','BW'),array('Central African Republic','CF'),array('Canada','CA'),array('Cocos (Keeling) Islands','CC'),array('Switzerland','CH'),array('Chile','CL'),array('China','CN'),array('Côte dIvoire','CI'),array('Cameroon','CM'),array('Congo, The Democratic Republic of the','CD'),array('Congo','CG'),array('Cook Islands','CK'),array('Colombia','CO'),array('Comoros','KM'),array('Cabo Verde','CV'),array('Costa Rica','CR'),array('Cuba','CU'),array('Curaçao','CW'),array('Christmas Island','CX'),array('Cayman Islands','KY'),array('Cyprus','CY'),array('Czechia','CZ'),array('Germany','DE'),array('Djibouti','DJ'),array('Dominica','DM'),array('Denmark','DK'),array('Dominican Republic','DO'),array('Algeria','DZ'),array('Ecuador','EC'),array('Egypt','EG'),array('Eritrea','ER'),array('Western Sahara','EH'),array('Spain','ES'),array('Estonia','EE'),array('Ethiopia','ET'),array('Finland','FI'),array('Fiji','FJ'),array('Falkland Islands (Malvinas)','FK'),array('France','FR'),array('Faroe Islands','FO'),array('Micronesia, Federated States of','FM'),array('Gabon','GA'),array('United Kingdom','GB'),array('Georgia','GE'),array('Guernsey','GG'),array('Ghana','GH'),array('Gibraltar','GI'),array('Guinea','GN'),array('Guadeloupe','GP'),array('Gambia','GM'),array('Guinea-Bissau','GW'),array('Equatorial Guinea','GQ'),array('Greece','GR'),array('Grenada','GD'),array('Greenland','GL'),array('Guatemala','GT'),array('French Guiana','GF'),array('Guam','GU'),array('Guyana','GY'),array('Hong Kong','HK'),array('Heard Island and McDonald Islands','HM'),array('Honduras','HN'),array('Croatia','HR'),array('Haiti','HT'),array('Hungary','HU'),array('Indonesia','ID'),array('Isle of Man','IM'),array('India','IN'),array('British Indian Ocean Territory','IO'),array('Ireland','IE'),array('Iran, Islamic Republic of','IR'),array('Iraq','IQ'),array('Iceland','IS'),array('Israel','IL'),array('Italy','IT'),array('Jamaica','JM'),array('Jersey','JE'),array('Jordan','JO'),array('Japan','JP'),array('Kazakhstan','KZ'),array('Kenya','KE'),array('Kyrgyzstan','KG'),array('Cambodia','KH'),array('Kiribati','KI'),array('Saint Kitts and Nevis','KN'),array('Korea, Republic of','KR'),array('Kuwait','KW'),array('Lao Peoples Democratic Republic','LA'),array('Lebanon','LB'),array('Liberia','LR'),array('Libya','LY'),array('Saint Lucia','LC'),array('Liechtenstein','LI'),array('Sri Lanka','LK'),array('Lesotho','LS'),array('Lithuania','LT'),array('Luxembourg','LU'),array('Latvia','LV'),array('Macao','MO'),array('Saint Martin (French part)','MF'),array('Morocco','MA'),array('Monaco','MC'),array('Moldova, Republic of','MD'),array('Madagascar','MG'),array('Maldives','MV'),array('Mexico','MX'),array('Marshall Islands','MH'),array('North Macedonia','MK'),array('Mali','ML'),array('Malta','MT'),array('Myanmar','MM'),array('Montenegro','ME'),array('Mongolia','MN'),array('Northern Mariana Islands','MP'),array('Mozambique','MZ'),array('Mauritania','MR'),array('Montserrat','MS'),array('Martinique','MQ'),array('Mauritius','MU'),array('Malawi','MW'),array('Malaysia','MY'),array('Mayotte','YT'),array('Namibia','NA'),array('New Caledonia','NC'),array('Niger','NE'),array('Norfolk Island','NF'),array('Nigeria','NG'),array('Nicaragua','NI'),array('Niue','NU'),array('Netherlands','NL'),array('Norway','NO'),array('Nepal','NP'),array('Nauru','NR'),array('New Zealand','NZ'),array('Oman','OM'),array('Pakistan','PK'),array('Panama','PA'),array('Pitcairn','PN'),array('Peru','PE'),array('Philippines','PH'),array('Palau','PW'),array('Papua New Guinea','PG'),array('Poland','PL'),array('Puerto Rico','PR'),array('Korea, Democratic Peoples Republic of','KP'),array('Portugal','PT'),array('Paraguay','PY'),array('Palestine, State of','PS'),array('French Polynesia','PF'),array('Qatar','QA'),array('Réunion','RE'),array('Romania','RO'),array('Russian Federation','RU'),array('Rwanda','RW'),array('Saudi Arabia','SA'),array('Sudan','SD'),array('Senegal','SN'),array('Singapore','SG'),array('South Georgia and the South Sandwich Islands','GS'),array('Saint Helena, Ascension and Tristan da Cunha','SH'),array('Svalbard and Jan Mayen','SJ'),array('Solomon Islands','SB'),array('Sierra Leone','SL'),array('El Salvador','SV'),array('San Marino','SM'),array('Somalia','SO'),array('Saint Pierre and Miquelon','PM'),array('Serbia','RS'),array('South Sudan','SS'),array('Sao Tome and Principe','ST'),array('Suriname','SR'),array('Slovakia','SK'),array('Slovenia','SI'),array('Sweden','SE'),array('Eswatini','SZ'),array('Sint Maarten (Dutch part)','SX'),array('Seychelles','SC'),array('Syrian Arab Republic','SY'),array('Turks and Caicos Islands','TC'),array('Chad','TD'),array('Togo','TG'),array('Thailand','TH'),array('Tajikistan','TJ'),array('Tokelau','TK'),array('Turkmenistan','TM'),array('Timor-Leste','TL'),array('Tonga','TO'),array('Trinidad and Tobago','TT'),array('Tunisia','TN'),array('Turkey','TR'),array('Tuvalu','TV'),array('Taiwan, Province of China','TW'),array('Tanzania, United Republic of','TZ'),array('Uganda','UG'),array('Ukraine','UA'),array('United States Minor Outlying Islands','UM'),array('Uruguay','UY'),array('United States','US'),array('Uzbekistan','UZ'),array('Holy See (Vatican City State)','VA'),array('Saint Vincent and the Grenadines','VC'),array('Venezuela, Bolivarian Republic of','VE'),array('Virgin Islands, British','VG'),array('Virgin Islands, U.S.','VI'),array('Viet Nam','VN'),array('Vanuatu','VU'),array('Wallis and Futuna','WF'),array('Samoa','WS'),array('Yemen','YE'),array('South Africa','ZA'),array('Zambia','ZM'),array('Zimbabwe','ZW'));
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
            <h3 class="card-title">Merge Manufacturers</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <form action="functions/merge.php" method="get">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Merge From</label>
                  <select name="mergeFrom" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" required>
                  <?php 
                    $sql = "SELECT * FROM tb_manufacturer";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<option value='".$row["ID"]."'>".$row["Name"]."</option>";
                        }
                    } else {
                        echo "<tr><td colspan=10 align=center>No Entries Found</td></tr>";
                    }
                    ?>
                  </select>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">

              </div>
              <!-- /.col -->
              <div class="col-md-6">
              <div class="form-group">
              <label>Merge Into</label>
                  <select name="mergeInto" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="2" tabindex="-2" aria-hidden="true" required>
                  <?php 
                    $sql = "SELECT * FROM tb_manufacturer";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<option value='".$row["ID"]."'>".$row["Name"]."</option>";
                        }
                    } else {
                        echo "<tr><td colspan=10 align=center>No Entries Found</td></tr>";
                    }
                    ?>
                  </select>
                </div>
                <!-- /.form-group -->
                </div></div> 
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
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