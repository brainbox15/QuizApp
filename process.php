<?php
session_start();
?>


<?php include 'header.php';?>


<?php 

// REGISTER USER
    if (isset($_POST['save_user'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $pass = $_POST['pass'];
        $confirm_pass = $_POST['confirm_pass'];


        // confirming pass & confrirm pass matches.
        if ($pass !== $confirm_pass) {
            exit("<p>password do not match</p><a href='index.php'>Go back</a</p>");
        }

        // checking if email already exist
        $email_exist = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");
        if (mysqli_num_rows($email_exist) > 0) {
            exit("<p>email already exist</p><a href='index.php'>login</a>");

        }

        //   checking if username already exist
        $username_exist = mysqli_query($connect, "SELECT * FROM users WHERE user_name = '$user_name'");
        if (mysqli_num_rows($username_exist) > 0) {
            exit("<p>User name already exist</p><a href='index.php'>Go back</a>");

        }

        // encrypting password
        $cryptic_pass = md5($pass);


        // inserting data into database.
        $insert_user = mysqli_query($connect, "INSERT INTO users( first_name, last_name, user_name, email, gender, phone, password) VALUES( '$first_name','$last_name', '$user_name', '$email', '$gender', '$phone', '$cryptic_pass')");
        if ($insert_user) {
            header("location: login.php");
        }

    }


    // LOGIN USER

if(isset($_POST['login_user'])){
    $usernamez = $_POST['user_name'];
    $pass = $_POST['pass'];
    $user_exist = mysqli_query($connect, "SELECT * FROM users WHERE user_name = '$usernamez'");


    // if user does not exist
    if(!mysqli_num_rows($user_exist)){
        exit("<p>User not found</p> <p><a href='index.php'>Sign up</a></p> <p><a href='login.php'>Go back</a></p>");        
    }
  
    $user_details = mysqli_fetch_assoc($user_exist);

    $cryptic_pass = md5($pass);

    if($cryptic_pass !== $user_details['password']){
        exit("<p>Incorrect Password</p><a href='login.php'>Go back</a>");
    }

    // creates a session array 
    $_SESSION["login"] = true;
    $_SESSION["id"] = $user_details['id'];

    
    header("Location: account.php");

    
}



// Admin login
if(isset($_POST['login_admin'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $user_exist = mysqli_query($connect, "SELECT * FROM admin WHERE email = '$email'");


    // if user does not exist
    if(!mysqli_num_rows($user_exist)){
        exit("<p>Admin not found</p> <p><a href='adminlogin.php'>Go back</a></p>");        
    }
  
    $user_details = mysqli_fetch_assoc($user_exist);

    

    if($pass !== $user_details['password']){
        exit("<p>Incorrect Password</p><a href='adminlogin.php'>Go back</a>");
    }

    // creates a session array 
    $_SESSION["login"] = true;
    $_SESSION["id"] = $user_details['id'];

    
    header("Location: admindash.php");

    
}



    ?>