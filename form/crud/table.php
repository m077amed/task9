<?php
require('../admin.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./table.css">
    <title>admin</title>
    <style>
        body {
            background-color: #ccc;
        }
        table {
            background-color: white;
            width: 100%;
        }
        th,td {
            height: 10vh;
            text-align: center;
            border: 1px solid #ccc;
        }
        ul {
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
</head>
<body>
    <table>
        <thead>
            <th>user_id </th>
            <th>user_name </th>
            <th>user_email </th>
            <th>user_phone </th>
            <th>user_password </th>
            <th>user_role </th>
            <th>update </th>
        </thead>
        <tbody>
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
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user['id']?></td>
                    <td><?= $user['name']?></td>
                    <td><?= $user['email']?></td>
                    <td><?= $user['phone']?></td>
                    <td><?= $user['password']?></td>
                    <td><?= $user['role']?></td>
                    <td>
                        <form action="<?= $_SERVER['PHP_SELF']?>">
                            <input type="hidden" name="user_id" value="<?= $user['id']?>">
                            <button>delete</button>
                        </form>
                        <form action="../edit.php" method="post">
                            <input type="hidden" name="id" value="<?= $user['id']?>">
                            <input type="hidden" name="name" value="<?= $user['name']?>">
                            <input type="hidden" name="email" value="<?= $user['email']?>">
                            <input type="hidden" name="password" value="<?= $user['password']?>">
                            <input type="hidden" name="phone" value="<?= $user['phone']?>">
                            <button type="submit">edit</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>