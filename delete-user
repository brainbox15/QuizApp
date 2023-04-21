<?php require "sessionstart.php"?>


<?php
require 'header.php';
?>

<?php
$id = $_GET['ID'];
$delete = mysqli_query($connect, "DELETE FROM users WHERE ID = '$id'");

if($delete){
    header("Location: admindash.php");
}
?>