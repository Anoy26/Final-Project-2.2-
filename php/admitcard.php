<?php
    include("connection.php");
    error_reporting(E_ERROR | E_PARSE);
    $user=$_GET[user];
    echo $user;
    // $query2 = "SELECT * FROM admin_info where User_ID='$user'";
    // $data = mysqli_query($conn, $query2);

    // $result = mysqli_fetch_assoc($data);
?>