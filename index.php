<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
<header>
    <div><p>QuizLab</p></div>
    <div><a href="login.php"><button>Log in</button></a></div>
</header>
<div id="form">
    <form action="process.php" method="post">
        <input type="text" name="first_name" required placeholder="Enter first name">

        <input type="text" name="last_name" required placeholder="Enter last name">

        <input type="text" name="user_name" required placeholder="Enter user name">

        <input type="text" name="email" required placeholder="Enter your email">

        <select name="gender" required>
            <option value="">Select gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>

        </select>

        
        <input type="tel" name="phone" placeholder="Enter your phone no">

       
        <input type="password" name="pass" placeholder="Enter your password">
        <input type="password" name="confirm_pass" placeholder="confirm password">



        </select><br>
        <input type="submit" value="Sign Up" name="save_user" id="register">

    </form>
    </div>
   

    <footer>
        <div> <a href="adminlogin.php"> <p>Admin login</p> </a></div>
        <div><p>About us</p></div>
        <div><p>Feedback</p></div>
        <div><p>Developers</p></div>

    </footer>
</body>

</html>