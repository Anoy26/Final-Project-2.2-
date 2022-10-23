<?php
    include("connection.php");
    error_reporting(E_ERROR | E_PARSE);
    $user=$_GET[user];
    $query2 = "SELECT * FROM admin_info where User_ID='$user'";
    $data = mysqli_query($conn, $query2);

    $result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Information</title>
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
        <li><a href="#" >Home</a></li>
        <li><a href="#">Addmission</a></li>
        <li><a href="Adminprofile.php">Profile</a></li>
      </ul>

      <div class="main">
        <a href="Adminlogout.php" class="user"><i class="ri-user-fill"></i>Log Out</a>
        <div class="bx bx-menu" id="menu-icon"></div>
      </div>
    </header>
    <script type="text/javascript" src="../js/script.js"></script>
    <div class="container">
        <form action="#" method="POST" enctype="multipart/form-data">

            <div class="title">
                Update Admin Information
            </div>

            <div class="form">

                <!-- <div class="input_feild">
                    <level>Upload Image</level>
                    <input type="file"  name="uploadfile" style="width:100%;" required>
                </div> -->

                <div class="input_feild">
                    <level>Name</level>
                    <input type="text" value="<?php echo $result[Ad_Name]; ?>" class="input" name="name" required>
                </div>

                <div class="input_feild">
                    <level>Parmanent Address</level>
                    <textarea name="paradd" required><?php echo $result[Par_Add]; ?></textarea>
                </div>

                <div class="input_feild">
                    <level>Present Address</level>
                    <textarea name="preadd"  required><?php echo $result[Pre_Add]; ?></textarea>
                </div>

                <div class="input_feild">
                    <level>Gender</level>
                    <div class="custom_select">
                        <select name="gender" required>
                            <option value="">Select</option>
                            <option value="Male"
                            <?php
                                if($result[Gender]=='Male')
                                {
                                    echo "Selected";
                                }
                            ?>
                            >Male</option>
                            <option value="Female"
                            <?php
                                if($result[Gender]=='Female')
                                {
                                    echo "Selected";
                                }
                            ?>
                            >Female</option>
                        </select>
                    </div>
                </div>

                <div class="input_feild">
                    <level>Phone Number</level>
                    <input type="text" value="<?php echo $result[Phone]; ?>" class="input" name="phone" required>
                </div>

                <div class="input_feild">
                    <level>Email</level>
                    <input type="text" value="<?php echo $result[Email]; ?>" class="input" name="email" required>
                </div>

                <div class="input_feild terms">
                    <level class="check">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                    </level>
                    <p>All the information are valid</p>
                </div>

                <div class="input_feild">
                    <input type="submit" value="Update" class="btn" name="update">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<?php
    
    if(isset($_POST['update']))
    {   
        
        $name  = $_POST['name'];
        $par   = $_POST['paradd'];
        $pst   = $_POST['preadd'];
        $gen   = $_POST['gender'];
        $phn   = $_POST['phone'];
        $email = $_POST['email'];
        $query0="UPDATE admin_info SET Ad_Name='$name',  Par_Add='$par', Pre_Add='$pst', Gender='$gen', Phone='$phn', Email='$email' where User_ID='$user'";
        $data0=mysqli_query($conn,  $query0);
        if($data0)
        {
            echo "
                <script> 
                window.location.assign('admindb.php');
                alert('Updated Successfully');
                </script>
            ";
        }
        else
        {
            echo "
            <script> 
            alert('Update Failed');
            </script>
            ";
        }
        
    }
?> 