<?php 
include("../layout/header.php");
include("../core/commonFunctions.php");
$errors = [];
if(checkMethod("POST") && checkAttributeName("username")){
    foreach($_POST as $keys => $values ) {
        $$keys =  clearData($values);
        echo "<pre>";
        echo $keys . " => " . clearData($values) . "<BR>";
        echo "</pre>";
    }

    // userName validation
    if(empty($username)) {
        $errors[] =  "Canot send empty user name";
    } elseif(minLength($username , 3)) {
        $errors[] = "user name must be more than 3 characters";
    } elseif(maxLength($username , 15)) {
        $errors[] = "user name must be smaller than 15 characters";
    }else {
        echo "user name is ok";
    }

    // email validation
    if(empty($email)) {
        $errors[] =  "Canot send empty user email";
    }elseif(!validEmail($email)) {
        $errors[] = "unValid email";
    }

    // password validation
    if(empty($password)) {
        $errors[] =  "Canot send empty user password";
    } elseif(minLength($password , 3)) {
        $errors[] = "password must be more than 3 characters";
    } elseif(maxLength($password , 15)) {
        $errors[] = "password must be smaller than 15 characters";
    }else {
        echo "user password is ok";
    }

    // errors check
    if(empty($errors)) {
        $userData = [$username,$email,sha1($password)];
        $userFile = fopen('../user/userData.csv',"a+");
        fputcsv($userFile,$userData);
        $_SESSION['auth'] = [$username,$email];
        redirect("../index.php");
    } else {
        $_SESSION["errors"] = $errors;
    }



    var_dump($errors);
} else {
    echo "unSupported method";
}

echo "<pre>";
print_r($_SESSION);
echo "</pre>";  

$conn = new mysqli('localhost:3007', 'root', '999mk777', 'clinic');
$con = new PDO('mysql:host=localhost;dbname=clinic', 'root', '123456');
$sql = $con->prepare('select * from majors');
$sql->execute();
$sql_users = $con->prepare('select * from booking');
$sql_users->execute();
$booking = $sql_users->fetchAll(PDO::FETCH_ASSOC);

// Insert data into the "users" table
$sql = "INSERT INTO booking (doctor_id, name, email, phone,date) VALUES (?, ?, ?, ?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $doctor_id, $name, $email, $phone, $booking_date);

if ($stmt->execute()) {
    $errors = ["You have  successfully Booked "];
    $_SESSION['errors'] = $errors;
    header("location:../Pages/index.php");
} else {
    echo "Error: " . $stmt->error;
}
// Close the database connection
$stmt->close();
$conn->close();