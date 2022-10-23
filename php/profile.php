<?php
    include("connection.php");
    session_start();
    error_reporting(E_ERROR | E_PARSE);
    $user=$_SESSION['user_name'];
    $query="SELECT * FROM student_info WHERE User_ID='$user'";
    $data=mysqli_query($conn, $query);
    $result=mysqli_fetch_assoc($data);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="../css/style4.css" />

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

</head>
<body>
    <header>
      <a href="#" class="logo"><span>JU</span></a>

      <ul class="navbar">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">Addmission</a></li>
        <li><a href="#">Help</a></li>
      </ul>

      <div class="main">
        <a href="logout.php" class="user"><i class="ri-user-fill"></i>Log Out</a>
        <div class="bx bx-menu" id="menu-icon"></div>
      </div>
    </header>

    <script type="text/javascript" src="../js/script.js"></script>

    <div class="container">

        <div class="profile"> 
            <img src="<?php echo $result[Stu_img]; ?>">
            <h3><?php echo"$user";?></h3>
            <div class="buttons">
                <a href ="admit.php" class="btn">Download Admit</a>
                <div>
                    <a href="Register.php" class="btn">Apply</a>
                    <a href="logout.php" class="btn">logout</a>
                </div>
            </div>
        </div>

        <div class="information">

            <div class="about">
                <h3 class="title">About</h3>
                <div class="box-container">
                    <div class="box">
                        <h3> <span>Name: </span><?php echo $result[Stu_Name]; ?></h3>
                        <h3> <span>Email: </span><?php echo $result[Email]; ?></h3>
                        <h3> <span>Pre_Address: </span> <?php echo $result[Pre_Add]; ?></h3>
                    </div>

                    <div class="box">
                        <h3> <span> Phone Number: </span> <?php echo $result[Phone]; ?> </h3>
                        <h3> <span> Gender: </span> <?php echo $result[Gender]; ?> </h3>
                        <h3> <span>Par_Address: </span> <?php echo $result[Par_Add]; ?></h3>
                    </div>
                </div>
            </div>

    </div>

    
</body>
</html>
