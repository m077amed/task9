<?php 
include("./layout/header.php");
include("./layout/footer.php");
include("./layout/nav.php");
include("./core/commonFunctions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>
  nav {
    margin-bottom: 200px;
    width: 20%;

  }
  nav a {
    margin: 0 40px;
  }
    body {
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100vh;
  }
  .login-container {
    background-color: #ccc;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    width: 50%;
  }
  .login-container h2 {
    margin-bottom: 20px;
  }
  .input-group {
    margin-bottom: 15px;
  }
  .input-group label {
    display: block;
    margin-bottom: 5px;
  }
  .input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }
  .login-button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
  }
</style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <?php if (isset($_SESSION["errors"])): ?>
        <?php foreach($_SESSION["errors"] as $error) :?>
            <div class="alert alert-danger text-center"> <?php echo $error?></div>
        <?php
        unset($_SESSION["errors"]);
        endforeach; ?>
    <?php endif; ?>
    <form action="./handlers/login.php" method="post">
      <div class="input-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
      </div>
      <div class="input-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
      </div>
      <button class="login-button" type="submit">Login</button>
    </form>
  </div>
</body>
</html>
