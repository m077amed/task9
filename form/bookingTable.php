<?php
require "./layout/header.php";
$con = new pdo("mysql:host=localhost:3307;dbname=task9","root","999mk777");
$sql = $con->query("SELECT * FROM booking");
$booking = $sql->fetchAll(PDO::FETCH_ASSOC); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container d-flex gap-2 flex-wrap   justify-content-sm-center p-5 ">

<h1 class=" Text-center">Booking</h1>
<table class="table ">
    <thead class="thead-dark text-center">
        <tr>
            <th scope="col">id</th>
            <th scope="col">doctor_id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">Phone</th>
            <th scope="col">Date</th>
            <th scope="col">Status</th>
            <th scope="col" style="width:250px;">Action</th>
        </tr>
    </thead>
    <?php
    if (isset($_SESSION['errors'])) : ?>
        <?php foreach ($_SESSION['errors'] as $error) : ?>
            <div class="text-center rounded">
                <?php echo '<h1 class="alert alert-success"> ' . $error . "</h1>" ?>
            </div>
        <?php endforeach; ?>
    <?php endif ?>
    <?php unset($_SESSION['errors']); ?>
    <?php foreach ($booking as $booke) : ?>


<tbody class="text-center">
    <tr>
        <th scope="row"><?Php echo $booke['id'] ?></th>
        <td scope="col"><?Php echo $booke['doctor_id'] ?></td>
        <td scope="col"><?Php echo $booke['name'] ?></td>
        <td scope="col"><?Php echo $booke['email'] ?></td>
        <td scope="col"><?Php echo $booke['phone'] ?></td>
        <td scope="col"><?Php echo $booke['date'] ?></td>
        <td scope="col"><?Php echo $booke['status'] ?></td>
        <td scope="col">
            <div class="btn">
                <form action="./Deleting_operation_booking.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $booke['id']; ?>">
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
                <form action="./editbBooking.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $booke['id']; ?>">
                    <input type="hidden" name="doctor_id" value="<?php echo $booke['doctor_id']; ?>">
                    <input type="hidden" name="name" value="<?php echo $booke['name']; ?>">
                    <input type="hidden" name="email" value="<?php echo $booke['email']; ?>">
                    <input type="hidden" name="phone" value="<?php echo $booke['phone']; ?>">
                    <input type="hidden" name="date" value="<?php echo $booke['date']; ?>">
                    <input type="hidden" name="status" value="<?php echo $booke['status']; ?>">
                    <button type="submit" class="btn btn-outline-primary">Edit</button>
                </form>
            </div>
        </td>
    </tr>
</tbody>
<?php endforeach; ?>
</table>
</div>
</body>
</html>