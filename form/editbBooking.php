<?php 
require "./layout/header.php";
    $id = $_POST['id'];
    $status = $_POST['status'];
    echo $id;
?>


<form action="./handleedit.php" method="post">
    <input for="" type="hidden" name ="odlId" value="<?= $id ?>"> 
    <div class="form-group">
        <div class="form-group d-flex justify-content-center text-center">
            <h1>please enter your status</h1>
            <select name="newstatus" class="btn btn-secondary dropdown-toggle ">
                <option value="Confirmed">Confirmed</option>
                <option value="Pending">Pending</option>
                <option value="Cancelled">Cancelled</option>
            </select>
        </div>
    <input type="submit">
</form>