<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/admit.css" />

    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
    rel="stylesheet"
    />

    <link
    rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap"
    rel="stylesheet"
    />
    <title>Admit Page</title>
</head>
    <header>
      <a href="#" class="logo"><span>JU</span></a>

      <ul class="navbar">
        <li><a href="home2.php" class="active">Home</a></li>
        <li><a href="admission2.php">Admission</a></li>
        <li><a href="profile.php">Profile</a></li>
      </ul>

      <div class="main">
        <a href="logout.php" class="user"><i class="ri-user-fill"></i>Log Out</a>
        <div class="bx bx-menu" id="menu-icon"></div>
      </div>
    </header>
    <script type="text/javascript" src="../js/script.js"></script>
<?php
    include("connection.php");
    session_start();
    error_reporting(E_ERROR | E_PARSE);
    $user=$_SESSION['user_name'];
    $query="SELECT * FROM registration_info WHERE User_ID='$user'";
    $data=mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);


    if($total != 0)
    {
        ?>
        <h2 align="center"> Download Admit From Here </h2>
        <center> <table border="1" cellspacing="10" width="25%">
        <tr>
            <th width="10%">Unit</th>
            <th width="10%">Exam_Roll</th>
            <th width="15%">Admit Card</th>
        </tr>


        <?php
        while($result=mysqli_fetch_assoc($data))
        {
            echo "<tr>
                    <td>".$result[Unit]."</td>
                    <td>".$result[Exam_ID]."</td>
                    <td><a href='admitcard.php?user=$result[Exam_ID]'> <input type='submit' value='Download' class='Update'> </a></td>
                </tr>
                ";
        }
    }
    else
    {
        echo "No records found";
    }
?>

</table>
</center>
</html>