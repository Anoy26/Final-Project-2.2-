<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log IN</title>
    <link rel="stylesheet" type="text/css" href="css/style3.css" />

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
      </ul>

      <div class="main">
        <a href="Adminsingup.php" class="user"><i class="ri-user-fill"></i>Sign UP</a>
        <div class="bx bx-menu" id="menu-icon"></div>
      </div>
    </header>

   
    <script type="text/javascript" src="js/script.js"></script>
        <div class="center">
            <h2>LogIn Here</h2>
            <form action="#" method="POST">
                <div class="form">
                    <input type='password' name="userid" class='input-field' placeholder='User ID' >
                    <input type='text' name="email" class='input-field' placeholder='Email' >
                    <input type='submit' name="login" value="Login" class="btn">
                    <div class="signup">Don't have User ID?<a href="Adminsingup.php" class="link">SignUp here</a></div>
                </div>
            </form>
        </div>   
</body>
</html>

<?php
    include("connection.php");

    if(isset($_POST['login']))
    {
        $user=$_POST['userid'];
        $email=$_POST['email'];
        $query3="SELECT * FROM admin_info where User_ID='".$user."' &&  Email='".$email."'";
        $data = mysqli_query($conn, $query3);
        $total = mysqli_num_rows($data);
        if($total != 1)
        {
            echo"
                <script>
                    alert('Invalid User_iD or Reg_NO');
                </script>
            ";
        }
        else 
        {
            $_SESSION['user_name']= $user;
            header('location:Adminprofile.php');
            //echo $_SESSION["user_name"];
            //echo $_SESSION["user_name"];
            /*echo"
                <script> 
                    window.sessionStorage.setItem('$user');
                    window.location.assign('profile.php');
                    alert('Login Successfully');
                </script>
            ";
            ?>
            <meta http-equiv = "refresh" content ="0; url = http://localhost/Addmission/profile.php"/>
            <?php
            */
        }

    }
?>
