<?php include "../../validate_session.php" ?>
<?php
include "../../mysql_connection.php";
if(isset($_GET["itemCode"]) && isset($_GET["itemName"]) && isset($_GET["itemType"]) && isset($_GET["manufacturerID"]) && isset($_GET["unitQty"]) && isset($_GET["quantity"]) && isset($_GET["isWeighted"]) && isset($_GET["qtyPackage"]) && isset($_GET["itemState"]) && isset($_GET["manufacturerDescription"])){
    $itemCode = $_GET["itemCode"];
    $itemName = $_GET["itemName"];
    $itemType = $_GET["itemType"];
    $manufacturerID = $_GET["manufacturerID"];
    $unitQty = $_GET["unitQty"];
    $quantity = $_GET["quantity"];
    $isWeighted = $_GET["isWeighted"];
    $qtyPackage = $_GET["qtyPackage"];
    $itemState = $_GET["itemState"];
    $manufacturerDescription = $_GET["manufacturerDescription"];
    //$sql = "INSERT INTO `tb_products` (`ManufacturerID`, `ItemCode`, `ItemType`, `ItemName`, `ManufacturerDescription`, `UnitQty`, `Quantity`, `BeIsWeighted`, `UnitOfMeasure`, `QtyInPackage`, `ItemStatus`) 
    //VALUES ('$manufacturerID', '$itemCode', '$itemType', '$itemName', '$manufacturerDescription', '$unitQty', '$quantity', '$isWeighted', '$unitQty', '$qtyPackage', '$itemState');";
    $sql = "UPDATE `tb_products`
    SET ManufacturerID=$manufacturerID,
    ItemName='$itemName',
    ItemType='$itemType',
    ManufacturerDescription='$manufacturerDescription',
    UnitQty='$unitQty',
    Quantity='$quantity',
    BeIsWeighted='$isWeighted',
    UnitOfMeasure='$unitQty',
    QtyInPackage='$qtyPackage',
    ItemStatus='$itemState'
    WHERE ItemCode='$itemCode'
    ";
    //echo $sql;
    $result = $conn->query($sql);
    if($result){
        echo "<script>
        alert('Record has been updated successfully!');
        window.history.back();
        </script>
        ";
    } else {
        echo "Error: ". $conn->error;
    }
} else{
    echo "parameters not valid";
}

?>