<?php
require "./core/commonFunctions.php";
$odlId = $_POST["odlId"];
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];
// SQL query to update the row$sql = "UPDATE your_table SET column1 = '$newValue1', column2 = '$newValue2' WHERE id = $rowToUpdate";
$con = new PDO("mysql:host=localhost:3307;dbname=task9","root","999mk777");

$sql = $con->query('SELECT * FROM users');
$sql = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = "UPDATE users SET name = '$name ', email = '$email', password = '$password',phone = '$phone' WHERE id = $odlId";
if ($con->query($sql) === TRUE) {
    redirect("./crud/table.php");
 } else {
    redirect("./crud/table.php");
 }
    

