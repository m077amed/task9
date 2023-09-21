<?php 
    include("./layout/header.php");
    include("./layout/footer.php");
    include("./layout/nav.php");
    include("./core/commonFunctions.php");
    if(!isset($_SESSION['auth'])) {
        redirect("./register.php");
    }

$con = new PDO("mysql:host=localhost:3307;dbname=task8","root","999mk777");
$sql = $con->query("SELECT * FROM doctors");
$doc = $sql->fetchAll(PDO::FETCH_ASSOC);  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
        }
        .container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .card {
            width: 250px;
            height: 400px;
            margin: 50px 10px;
        }
        .btn a{
            background-color: #D83F31;
            color: white;
            position: absolute;
            bottom: 20px;
            margin:0 50px;
            text-decoration: none ;
            padding: 10px;
            border-radius: 15px;
        }
        .btn a:hover {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
<h1 >our doctors</h1>
    <div class="container ">
        <?php
        foreach ($doc as $doctor) : ?>
            <form action="check.php" method="post">
                <div class=" card">
                    <input type="hidden" name="doc" value="<?= $doctor['id']; ?>">
                    <img src="./pexels-karolina-grabowska-4021775.jpg" alt="">  
                    <input type="hidden" name="name" value="<?=  $doctor['name']; ?>">
                    <input type="hidden" name="bio" value="<?= $doctor['bio']; ?>">
                    <div class="card-body">
                        <h5 class="card-title text-center "><?= $doctor['name']; ?></h5>
                        <p class="card-text "><?= $doctor['bio']; ?></p>
                        <button type="submit" class="btn ">check him</button>
                    </div>
                </div>
            </form>
        <?php endforeach; ?>
    </div>
</section>
</body>
</html>

