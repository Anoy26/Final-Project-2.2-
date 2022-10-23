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
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />

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
        <li><a href="home2.php" class="active">Home</a></li>
        <li><a href="admission2.php">Addmission</a></li>
        <li><a href="profile.php">Profile</a></li>
      </ul>

      <div class="main">
        <a href="logout.php" class="user"><i class="ri-user-fill"></i>Log Out</a>
        <div class="bx bx-menu" id="menu-icon"></div>
      </div>
    </header>

    <script type="text/javascript" src="../js/script.js"></script>

    <div class="container">
        <form action="#" method="POST" enctype="multipart/form-data">

            <div class="title">
                Registration Form
            </div>

            <div class="form">

                <div class="input_feild">
                    <level>Registration Number</level>
                    <input type="text" class="input" name="regno" required>
                </div>

                <div class="input_feild">
                    <level>SSC Roll</level>
                    <input type="text" class="input" name="ssc" required>
                </div>

                <div class="input_feild">
                    <level> SSC Board</level>
                    <div class="custom_select">
                        <select name="sboard" required>
                            <option value="">Select</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Mymensingh">Mymensingh</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Dinajpur">Dinajpur</option>
                            <option value="Jessore">Jessore</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Cumilla">Cumilla</option>
                        </select>
                    </div>
                </div>

                <div class="input_feild">
                    <level>HSC Roll</level>
                    <input type="text" class="input" name="hsc" required>
                </div>

                <div class="input_feild">
                    <level> HSC Board</level>
                    <div class="custom_select">
                        <select name="hboard" required>
                            <option value="">Select</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Mymensingh">Mymensingh</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Dinajpur">Dinajpur</option>
                            <option value="Jessore">Jessore</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Cumilla">Cumilla</option>
                        </select>
                    </div>
                </div>

                

                <div class="input_feild">
                    <level>Unit</level>
                    <div class="custom_select">
                        <select name="unit" required>
                            <option value="">Select</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="H">H</option>
                        </select>
                    </div>
                </div>

                <div class="input_feild">
                    <level>Transaction Number</level>
                    <input type="text" class="input" name="trstno" required>
                </div>

               

                <div class="input_feild terms">
                    <level class="check">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                    </level>
                    <p>All the information are valid</p>
                </div>

                <div class="input_feild">
                    <input type="submit" value="Register" class="btn" name="register">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<?php
    
    if(isset($_POST['register']))
    { 
        //aigula holo ager onno tabler er stored data. $user hoilo User_ID
        $name=$result[Stu_Name];
        $Email=$result[Email];
        $presentadd=$result[Pre_Add];
        $parmanentadd=$result[Par_Add];
        $gender=$result[Gender];
        $phone=$result[Phone];

        $picture= $result[Stu_img];//picture name aita. tr sb data ak jn student er sb ai file e ase

        //auto generated exam roll ase oita table e store hoy auto

        $query1 = "SELECT * FROM registration_info";

        $data1 = mysqli_query($conn, $query1);

        $total = mysqli_num_rows($data1);

        $id=$total+ 202301;//auto generated exam roll

        
        $regn  = $_POST['regno'];
        $sroll = $_POST['ssc'];
        $hroll = $_POST['hsc'];
        $s_board=$_POST['sboard'];
        $h_board=$_POST['hboard'];
        $unit  = $_POST['unit'];
        $tid   = $_POST['trstno'];
        

        $query="INSERT INTO registration_info (User_ID, Exam_ID, Reg_NO, SSC_Roll, SSC_Board, HSC_Roll, HSC_Board, Unit, Transaction) VALUES ('$user', '$id', '$regn', '$sroll', '$s_board', '$hroll', '$h_board', '$unit', '$tid')";
        $data=mysqli_query($conn, $query);

        //$query = "INSERT INTO student (Exam_ID, Std_img, Name, Reg_NO, SSC_Roll,  HSC_Roll, Par_Add, Pre_Add, Gender, Unit, Trsc_ID, Phone, Email) VALUES('$id','$folder', '$name','$regn','$sroll', '$hroll','$par','$pst','$gen','$unit','$tid','$phn','$email')";
        //$data = mysqli_query($conn, $query);

        if($data)
        {
            echo"
                <script>
                window.location.assign('profile.php');
                alert('Registered Successfully');
                </script>
            ";
            
         }
    }
    
?> 