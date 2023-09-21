<?php 
session_start();

function getTitle() {
    $titleName = $_SERVER["SCRIPT_NAME"];
    $titleName = explode("/",$titleName);
    $titleName = end($titleName);
    $titleName = explode(".",$titleName);
    $titleName = $titleName[0];
    return $titleName ;
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title> <?php echo getTitle(); ?></title>
    </head>
    <body>