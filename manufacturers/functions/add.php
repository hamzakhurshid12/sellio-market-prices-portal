<?php include "../../validate_session.php" ?>
<?php
include "../../mysql_connection.php";
if(isset($_GET["manufacturerName"]) && isset($_GET["manufacturerCountry"])){
    $name = $_GET["manufacturerName"];
    $country = $_GET["manufacturerCountry"];
    $sql = "INSERT INTO `tb_manufacturer` (`Name`, `Country`) VALUES ('{$name}', '{$country}');";
    $result = $conn->query($sql);
    echo "<script>
    alert('Record has been added successfully!');
    window.history.back();
    </script>
    ";
} else{
    echo "parameters not valid";
}

?>