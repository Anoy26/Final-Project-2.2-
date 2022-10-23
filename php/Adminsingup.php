<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />

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
        <a href="Adminlogin.php" class="user"><i class="ri-user-fill"></i>Sign In</a>
        <div class="bx bx-menu" id="menu-icon"></div>
      </div>
    </header>
    <script type="text/javascript" src="js/script.js"></script>

    <div class="container">
        <form action="#" method="POST" enctype="multipart/form-data">

            <div class="title">
                 Admin Sign UP Form
            </div>

            <div class="form">

                <div class="input_feild">
                    <level>Upload Image</level>
                    <input type="file" name="uploadfile" style="width:100%;" required>
                </div>

                <div class="input_feild">
                    <level>Name</level>
                    <input type="text" class="input" name="name" required>
                </div>

                <!-- <div class="input_feild">
                    <level>Registration Number</level>
                    <input type="text" class="input" name="regno" required>
                </div>

                <div class="input_feild">
                    <level>SSC Roll</level>
                    <input type="text" class="input" name="ssc" required>
                </div>

                <div class="input_feild">
                    <level>HSC Roll</level>
                    <input type="text" class="input" name="hsc" required>
                </div> -->

                <div class="input_feild">
                    <level>Parmanent Address</level>
                    <textarea name="paradd" required></textarea>
                </div>

                <div class="input_feild">
                    <level>Present Address</level>
                    <textarea name="preadd" required></textarea>
                </div>

                <div class="input_feild">
                    <level>Gender</level>
                    <div class="custom_select">
                        <select name="gender" required>
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>

                <!-- <div class="input_feild">
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
                </div> -->

                <!-- <div class="input_feild">
                    <level>Transaction Number</level>
                    <input type="text" class="input" name="trstno" required>
                </div> -->

                <div class="input_feild">
                    <level>Phone Number</level>
                    <input type="text" class="input" name="phone" required>
                </div>

                <div class="input_feild">
                    <level>Email</level>
                    <input type="text" class="input" name="email" required>
                </div>

                <div class="input_feild">
                    <level>Admin Password</level>
                    <input type="password" class="input" name="pass" required>
                </div>

                <div class="input_feild terms">
                    <level class="check">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                    </level>
                    <p>I agree with the terms and condition</p>
                </div>

                <div class="input_feild">
                    <input type="submit" value="Sign Up" class="btn" name="signup">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<?php
    
    if(isset($_POST['signup']) && $_POST['pass']=="12345")
    {

        $filename =  $_FILES["uploadfile"]["name"];
        $tempname =  $_FILES["uploadfile"]["tmp_name"];
        $folder = "images/".$filename;
        move_uploaded_file($tempname,$folder);

        $name  = $_POST['name'];
        $par   = $_POST['paradd'];
        $pst   = $_POST['preadd'];
        $gen   = $_POST['gender'];
        $phn   = $_POST['phone'];
        $email = $_POST['email'];
        
        $query1="INSERT INTO admin_info (Ad_img, Ad_Name, Par_Add, Pre_Add, Gender, Phone, Email) VALUES ('$folder', '$name', '$par', '$pst', '$gen', '$phn', '$email')";
        $data1=mysqli_query($conn, $query1);
        

        if($data1)
        {
            
            $query2 = "SELECT * FROM admin_info";

            $data2 = mysqli_query($conn, $query2);

            $d = mysqli_num_rows($data2);

            $n=5;
            function getName($n)
            {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $randomString = '';

                for ($i = 0; $i < $n; $i++) 
                {
                    $index = rand(0, strlen($characters) - 1);
                    $randomString .= $characters[$index];
                }

                return $randomString;
            }

            $rand=getName($n);

            $User_id="Ad_JU_".$rand."_".$d;

            $query3="UPDATE admin_info SET User_ID='".$User_id."' where Email='".$email."'";

            $done=mysqli_query($conn, $query3);

            echo"
                <script>
                window.location.assign('Adminlogin.php');
                alert('Signup Successfully');
                </script>
            ";
        }
    }
    // echo"
    //     <script>
    //     alert('Signup Failed');
    //     </script>
    // ";
?> 