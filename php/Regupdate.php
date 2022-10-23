<?php
    include("connection.php");
    error_reporting(E_ERROR | E_PARSE);
    $user=$_GET[user];
    $query2 = "SELECT * FROM registration_info where User_ID='$user'";
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
        <li><a href="#">Home</a></li>
        <li><a href="#">Addmission</a></li>
        <li><a href="Adminprofile.php">Profile</a></li>
      </ul>

      <div class="main">
        <a href="Adminlogout.php" class="user"><i class="ri-user-fill"></i>Log Out</a>
      </div>
    </header>
    <script type="text/javascript" src="js/script.js"></script>
    <div class="container">
        <form action="#" method="POST" enctype="multipart/form-data">

            <div class="title">
                Update Regstration Information
            </div>

            <div class="form">

                <div class="input_feild">
                    <level>Registration Number</level>
                    <input type="text" value="<?php echo $result[Reg_NO]; ?>" class="input" name="regno" required>
                </div>

                <div class="input_feild">
                    <level>SSC Roll</level>
                    <input type="text" value="<?php echo $result[SSC_Roll]; ?>" class="input" name="ssc" required>
                </div>

                <div class="input_feild">
                    <level> SSC Board</level>
                    <div class="custom_select">
                        <select name="sboard" required>
                            <option value="">Select</option>
                            <option value="Dhaka"
                            <?php
                                if($result[SSC_Board]=='Dhaka')
                                {
                                    {
                                        echo "Selected";
                                    }
                                }
                            ?>
                            >Dhaka</option>
                            <option value="Mymensingh"
                            <?php
                                if($result[SSC_Board]=='Mymensingh')
                                {
                                    {
                                        echo "Selected";
                                    }
                                }
                            ?>
                            >Mymensingh</option>
                            <option value="Rajshahi"
                            <?php
                                if($result[SSC_Board]=='Rajshahi')
                                {
                                    {
                                        echo "Selected";
                                    }
                                }
                            ?>
                            >Rajshahi</option>
                            <option value="Dinajpur"
                            <?php
                                if($result[SSC_Board]=='Dinajpur')
                                {
                                    {
                                        echo "Selected";
                                    }
                                }
                            ?>
                            >Dinajpur</option>
                            <option value="Jessore"
                            <?php
                                if($result[SSC_Board]=='Jessore')
                                {
                                    {
                                        echo "Selected";
                                    }
                                }
                            ?>
                            >Jessore</option>
                            <option value="Sylhet"
                            <?php
                                if($result[SSC_Board]=='Sylhet')
                                {
                                    {
                                        echo "Selected";
                                    }
                                }
                            ?>
                            >Sylhet</option>
                            <option value="Barisal"
                            <?php
                                if($result[SSC_Board]=='Barisal')
                                {
                                    {
                                        echo "Selected";
                                    }
                                }
                            ?>
                            >Barisal</option>
                            <option value="Chittagong"
                            <?php
                                if($result[SSC_Board]=='Chittagong')
                                {
                                    {
                                        echo "Selected";
                                    }
                                }
                            ?>
                            >Chittagong</option>
                            <option value="Cumilla"
                            <?php
                                if($result[SSC_Board]=='Cumilla')
                                {
                                    {
                                        echo "Selected";
                                    }
                                }
                            ?>
                            >Cumilla</option>
                        </select>
                    </div>
                </div>


                <div class="input_feild">
                    <level>HSC Roll</level>
                    <input type="text" value="<?php echo $result[HSC_Roll]; ?>" class="input" name="hsc" required>
                </div>

                <div class="input_feild">
                    <level> HSC Board</level>
                    <div class="custom_select">
                        <select name="hboard" required>
                            <option value="">Select</option>
                            <option value="Dhaka"
                            <?php
                                if($result[HSC_Board]=='Dhaka')
                                {
                                    {
                                        echo "Selected";
                                    }
                                }
                            ?>
                            >Dhaka</option>
                            <option value="Mymensingh"
                            <?php
                                if($result[HSC_Board]=='Mymensingh')
                                {
                                    {
                                        echo "Selected";
                                    }
                                }
                            ?>
                            >Mymensingh</option>
                            <option value="Rajshahi"
                            <?php
                                if($result[HSC_Board]=='Rajshahi')
                                {
                                    {
                                        echo "Selected";
                                    }
                                }
                            ?>
                            >Rajshahi</option>
                            <option value="Dinajpur"
                            <?php
                                if($result[HSC_Board]=='Dinajpur')
                                {
                                    {
                                        echo "Selected";
                                    }
                                }
                            ?>
                            >Dinajpur</option>
                            <option value="Jessore"
                            <?php
                                if($result[HSC_Board]=='Jessore')
                                {
                                    {
                                        echo "Selected";
                                    }
                                }
                            ?>
                            >Jessore</option>
                            <option value="Sylhet"
                            <?php
                                if($result[HSC_Board]=='Sylhet')
                                {
                                    {
                                        echo "Selected";
                                    }
                                }
                            ?>
                            >Sylhet</option>
                            <option value="Barisal"
                            <?php
                                if($result[HSC_Board]=='Barisal')
                                {
                                    {
                                        echo "Selected";
                                    }
                                }
                            ?>
                            >Barisal</option>
                            <option value="Chittagong"
                            <?php
                                if($result[HSC_Board]=='Chittagong')
                                {
                                    {
                                        echo "Selected";
                                    }
                                }
                            ?>
                            >Chittagong</option>
                            <option value="Cumilla"
                            <?php
                                if($result[HSC_Board]=='Cumilla')
                                {
                                    {
                                        echo "Selected";
                                    }
                                }
                            ?>
                            >Cumilla</option>
                        </select>
                    </div>
                </div>

                <div class="input_feild">
                    <level>Unit</level>
                    <div class="custom_select">
                        <select name="unit" required>
                            <option value="">Select</option>
                            <option value="A"
                            <?php
                                if($result[Unit]=='A')
                                {
                                    echo "Selected";
                                }
                            ?>
                            >A</option>
                            <option value="B"
                            <?php
                                if($result[Unit]=='B')
                                {
                                    echo "Selected";
                                }
                            ?>
                            >B</option>
                            <option value="C"
                            <?php
                                if($result[Unit]=='C')
                                {
                                    echo "Selected";
                                }
                            ?>
                            >C</option>
                            <option value="D"
                            <?php
                                if($result[Unit]=='D')
                                {
                                    echo "Selected";
                                }
                            ?>
                            >D</option>
                            <option value="E"
                            <?php
                                if($result[Unit]=='E')
                                {
                                    echo "Selected";
                                }
                            ?>
                            >E</option>
                            <option value="H"
                            <?php
                                if($result[Unit]=='H')
                                {
                                    echo "Selected";
                                }
                            ?>
                            >H</option>
                        </select>
                    </div>
                </div>

                <div class="input_feild">
                    <level>Transaction Number</level>
                    <input type="text" value="<?php echo $result[Transaction]; ?>" class="input" name="trstno" required>
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
        
        $regn  = $_POST['regno'];
        $sroll = $_POST['ssc'];
        $s_board=$_POST['sboard'];
        $hroll = $_POST['hsc'];
        $h_board=$_POST['hboard'];
        $unit  = $_POST['unit'];
        $tid   = $_POST['trstno'];
        $query="UPDATE registration_info SET Reg_NO='$regn', SSC_Roll='$sroll', SSC_Board='$s_board', HSC_Roll='$hroll', HSC_Board='$h_board', Unit='$unit', Transaction='$tid'";
        $data=mysqli_query($conn, $query);
        // $query0="UPDATE registration_info SET Reg_NO='$regn', SSC_Roll='$sroll', SSC_Board='$s_board', HSC_Roll='$hroll', HSC_Board='$h_board', Unit='$unit', Transaction='$tid', where User_ID='$user'";
        // $data0=mysqli_query($conn,  $query0);
        if($data)
        {
            echo "
                <script> 
                window.location.assign('registrationdb.php');
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