<?php include "../../validate_session.php" ?>
<?php
include "../../mysql_connection.php";
if(isset($_GET["mergeFrom"]) && isset($_GET["mergeInto"])){
    $from = $_GET["mergeFrom"];
    $to = $_GET["mergeInto"];
    $sql = "UPDATE tb_products SET ManufacturerID={$to} WHERE ManufacturerID={$from}";
    $result = $conn->query($sql);
    if($result){
    $sql = "DELETE FROM tb_manufacturer WHERE ID={$from}";
        $result = $conn->query($sql);
        if($result){
            echo "<script>
            alert('Manufacturers have been merged successfully!');
            window.history.back();
            </script>
            ";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else{
    echo "Parameters are not valid";
}

?>