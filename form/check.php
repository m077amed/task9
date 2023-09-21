<?php 
require "./admin.php";
$doc_id = $_POST['doc'];
$doc_name = $_POST['name'];
$doc_bio = $_POST['bio'];
?>
<style> 
body {
    display: flex;
    justify-content: center;
    align-items: center;
}
nav {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #ccc;
}
    form{
        width: 100%;
        height: 70vh;
    }
    form  {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background-color: #ccc;

    }
    form div {
        margin: 20px 0;
    }
    input {
        padding: 10px 40px;
        
    }
    .textBox {
        width: 500px;
        height: 100px;
    }
    ul {
        position: absolute;
        top: 0;
        left: 0;
        list-style-type: none;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50%;
    }
    li a{
        margin: 0 50px;
        text-decoration: none;
    }
    
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <ul>
        <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../crud/table.php">admin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../logout.php">logout</a>
        </li>
    </ul>
    <form action="./booking.php" method="post">
        <div class=" card">
            <h1>get a appointment with <?=$doc_name?> now</h1>
            <h1> <?=$doc_bio?> </h1>
            <h2>send your data here</h2>
            <input type="hidden" name="doctor_id" value="<?= $doc_id ?>">
            <input type="hidden" name="doctor_name" value="<?= $doc_name ?>">
            <div >
                <label for="">enter your name</label>
                <input type="text" name="userName"  placeholder="enter your Name">
            </div>
            <div>
                <label for="">enter your phone</label>
                <input type="phone" name="userPhone" placeholder="enter your phone">
            </div>
            <div>
                <label for="">enter your email</label>
                <input type="email" name="userEmail" placeholder="enter your Email">
            </div>
            <div>
                <label for="">enter your password</label>
                <input type="password" name="userPassword"  placeholder="enter your Password">
            </div>
            <label for="">what is your problem</label>
            <input type="text" class="textBox">
        </div>
        <input type="submit">
    </form>
</body>
</html>