<?php 

$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"]
?>
<form action="./handleUpdate.php" method="post">
    <input for="" type="hidden"  name ="odlId" value="<?= $id ?>"> 
    <input type="text" name = "name" placeholder="please enter your new name " value="<?= $name ?>">
    <input type="email"  name = "email" placeholder="please enter your new email " value="<?= $email ?>">
    <input type="password" name = "password" placeholder="please enter your new password " value="<?= $password ?>">
    <input type="phone" name = "phone" placeholder="please enter your new phone " value="<?= $phone ?>">
    <input type="submit">
</form>
<?php 





?>
