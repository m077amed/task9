<?php 
require "./core/commonFunctions.php";
$userName = $_POST["userName"];
$userPhone = $_POST["userPhone"];
$userEmail = $_POST["userEmail"];
$userPassword = $_POST["userPassword"];
$doc_id = $_POST["doctor_id"];
$doc_name = $_POST["doctor_name"];


$conn = mysqli_connect('localhost:3307', 'root', '999mk777', 'task9');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert data into the database
$sql = "INSERT INTO booking (name,doctor_id, email,phone) VALUES ('$userName','$doc_id' , '$userEmail','$userPhone')";

if (mysqli_query($conn, $sql)) {
    echo "Data saved successfully.";
    redirect("./crud/table.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>











?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <table>
        <thead>
            <!-- <th>user_id</th> -->
            <th>user_name</th>
            <th>user_email</th>
            <th>user_password</th>
            <th>user_phone</th>
            <th>doctor_id</th>
            <th>doctor_name</th>
        </thead>
        <tbody>
            <tr>
                <td><?= $userName?></td>
                <td><?= $userEmail?></td>
                <td><?= $userPassword?></td>
                <td><?= $userPhone?></td>
                <td><?= $doc_id?></td>
                <td><?= $doc_name?></td>
            </tr>
        </tbody>
    </table> -->
</body>
</html>