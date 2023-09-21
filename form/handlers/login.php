<?php 
session_start(); 
include("../core/commonFunctions.php");

$errors = [];

if(checkMethod("POST") && checkAttributeName("username")){

    foreach($_POST as $keys => $values ) {
        $$keys =  clearData($values);
    }

    // userName validation
    if(empty($username)) {
        $errors[] =  "Canot send empty user name";
    } elseif(minLength($username , 3)) {
        $errors[] = "user name must be more than 3 characters";
    } elseif(maxLength($username , 15)) {
        $errors[] = "user name must be smaller than 15 characters";
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
        $userData = [$username,sha1($password)];
        $_SESSION['auth'] = [$username];
        redirect("../index.php");
    } else {
        $_SESSION["errors"] = $errors;
        redirect("../login.php");
    }
} else {
    echo "unSupported method";
}


