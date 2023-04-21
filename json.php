<?php

include 'header.php';
$sql = "SELECT * FROM users";
$result = mysqli_query($connect, $sql);
$json_array = array();
while ($row = mysqli_fetch_assoc($result)) {
    $json_array[] = $row;

}
header('Content-Type: application/json');
// header('HTTP/1.0 200 success');
echo json_encode($json_array)

    ?>