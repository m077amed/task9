<?php 
    require "./layout/header.php";
    require "./core/commonFunctions.php";
    $status = $_POST["newstatus"];
    $odlId = $_POST["odlId"];
    // SQL query to update the row$sql = "UPDATE your_table SET column1 = '$newValue1', column2 = '$newValue2' WHERE id = $rowToUpdate";
    $con = new PDO("mysql:host=localhost:3307;dbname=task9","root","999mk777");
$sql = $con->query('SELECT * FROM booking');
$sql = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = "UPDATE booking SET status = '$status' WHERE id = $odlId";
if ($con->query($sql) === TRUE) {
    redirect("./bookingTable.php");
 } else {
    redirect("./bookingTable.php");
 }
    
?>