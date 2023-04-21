<?php require "sessionstart.php"?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/account.css">
    <style>
        *{
            font-family: cursive;

        }


        button{
            background-color: red;
            border: none;
            outline: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        button a{
            color: #fff;
        text-decoration: none;

        }

        h2{
            text-align: center;
            font-size: 30px;
        }

    </style>
</head>

<body>
<header>
    <div> <a href="index.php"> <p>QuizLab</p> </a></div>
    <div></div>
    <div> <a href="adminlogin.php"><button>Log out</button> </a> </div>
</header>

<?php   
include "header.php";
$students = mysqli_query($connect, 'SELECT * FROM users');

?> 

<h2>All Users</h2>
<table class="table">
    <thead>
        <td>S/N</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>User Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Action</td>

    </thead>
    <tbody>
        <?php
        foreach ($students as $student): ?>
    <tr>
        <td><?= $student['ID'] ?></td>
        <td><?= $student['first_name'] ?></td>
        <td><?= $student['last_name'] ?></td>
        <td><?= $student['user_name'] ?></td>
        <td><?= $student['email'] ?></td>
        <td><?= $student['phone'] ?></td>
        <td>
        <button><a href="delete-student.php?ID=<?= $student['ID'] ?>">Delete</a></button>

        </td>

    </tr>
    <?php 
    endforeach;
     ?>
    </tbody>
</table>

   

    <footer>
        <div><p>Admin login</p></div>
        <div><p>About us</p></div>
        <div><p>Feedback</p></div>
        <div><p>Developers</p></div>

    </footer>
</body>

</html>