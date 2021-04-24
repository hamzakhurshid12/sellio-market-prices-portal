<?php include $_SERVER['DOCUMENT_ROOT']."/projects/SellioMarket_PricesPortal/validate_session.php" ?>

<?php
$conn = new mysqli("localhost","root","","pricesuser_prices_db");
$conn->set_charset("utf8");
// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>