<?php 

function checkMethod($input) {
    if($_SERVER['REQUEST_METHOD'] == $input) {
        return true;
    } 
    return false;
}

function checkAttributeName($input) {
    if(isset($_POST[$input])) {
        return true;
    }
    return false;
}

function clearData($input) {
    return trim(htmlspecialchars(htmlentities($input)));
}

function checkDataIsEmpty($input){
    if(empty($input)) {
        return true;
    }
    return false;
}

function minLength($input,$length) {
    if(strlen($input) < $length) {
        return true;
    }
    return false;
}

function maxLength($input,$length) {
    if(strlen($input) > $length) {
        return true;
    }
    return false;
}

function validEmail($input) {
    if(filter_var($input,FILTER_VALIDATE_EMAIL)) {
        return true;
    } 
    return false;
}

function redirect($input) {
    header("location: $input");
    die;
}