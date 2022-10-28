<?php
    include("connection.php");
    error_reporting(E_ERROR | E_PARSE);
    $user=$_GET[user];
    $query2 = "SELECT * FROM qr where Exam_ID='$user'";
    $data = mysqli_query($conn, $query2);

    $result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
    <div>
    <h1 align="center"> Admit Card  </h1>
    </div>
    <div>
      <center> <img src='<?php  echo $result[File2]; ?>' height='240px' width='240px'></center>
    </div>
</body>
</html>