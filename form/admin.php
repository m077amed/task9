<?php 

$con = new PDO("mysql:host=localhost:3307;dbname=task9","root","999mk777");
if(isset($_GET['user_id'])) {
    deleteUser($con,$_GET['user_id']);
}
$users = getDataUsers($con);

function getDataUsers($con){
    $sql = $con->query('SELECT * FROM users');
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}
function deleteUser($con,$id){
    $sql = $con->prepare("DELETE FROM users WHERE id = $id");
    $sql->execute();
}
function editUser($con,$id){
    // $sql = $con->prepare("$sql = "UPDATE doctors SET name = '$name', email = '$email', major_id = '$major' , password = '$pass', bio = '$bio', image = '$image' WHERE id = $oldid";");
    // $sql->execute();
}