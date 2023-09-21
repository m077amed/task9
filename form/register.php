<?php 
include "./layout/header.php";
include("./layout/nav.php");
include("./layout/footer.php");
include("./core/commonFunctions.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    nav {
        margin-bottom: 100px;
        width: 30%;
    }
    nav a {
        margin: 0 100px;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        min-height: 100vh;
}
    .container {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 50%;
}
    .form-group {
        margin-bottom: 20px;
}
    label {
        display: block;
        margin-bottom: 5px;
}
    input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
}
    button {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
}
    button:hover {
        background-color: #0056b3;
}
</style>
<title><?php echo getTitle();?></title>
</head>
<body>
    <div class="container">
    <h2>Registration Form</h2>
    
    <?php if(isset($_SESSION["errors"])) :?>
        <?php foreach($_SESSION["errors"] as $error): ?> 
            <div class="alert alert-danger text-center"><?php echo($error)?></div>
        <?php endforeach; 
        unset($_SESSION["errors"]);?>
    <?php endif;?>

    <form action="handlers/register.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" >
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" >
        </div>
        <div class="form-group">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword" name="confirmPassword" >
        </div>
        <button type="submit">Register</button>
    </form>
</div>
</body>
</html>
