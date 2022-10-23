<?php
    include("connection.php");
    error_reporting(E_ERROR | E_PARSE);
    $user=$_GET[user];
    $query2 = "SELECT * FROM student where User_ID='$user'";
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
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container">
        <form action="#" method="POST" enctype="multipart/form-data">

            <div class="title">
                Update Student Information
            </div>

            <div class="form">

                <!-- <div class="input_feild">
                    <level>Upload Image</level>
                    <input type="file"  name="uploadfile" style="width:100%;" required>
                </div> -->

                <div class="input_feild">
                    <level>Name</level>
                    <input type="text" value="<?php echo $result[Name]; ?>" class="input" name="name" required>
                </div>

                <div class="input_feild">
                    <level>Registration Number</level>
                    <input type="text" value="<?php echo $result[Reg_No]; ?>" class="input" name="regno" required>
                </div>

                <div class="input_feild">
                    <level>SSC Roll</level>
                    <input type="text" value="<?php echo $result[SSC_Roll]; ?>" class="input" name="ssc" required>
                </div>

                <div class="input_feild">
                    <level>HSC Roll</level>
                    <input type="text" value="<?php echo $result[HSC_Roll]; ?>" class="input" name="hsc" required>
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
                    <input type="text" value="<?php echo $result[Trsc_ID]; ?>" class="input" name="trstno" required>
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
                        <input type="checkbox">
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
        $regn  = $_POST['regno'];
        $sroll = $_POST['ssc'];
        $hroll = $_POST['hsc'];
        $par   = $_POST['paradd'];
        $pst   = $_POST['preadd'];
        $gen   = $_POST['gender'];
        $unit  = $_POST['unit'];
        $tid   = $_POST['trstno'];
        $phn   = $_POST['phone'];
        $email = $_POST['email'];
        $query0="UPDATE student SET Name='$name', Reg_No='$regn', SSC_Roll='$sroll', HSC_Roll='$hroll', Par_Add='$par', Pre_Add='$pst', Gender='$gen', Unit='$unit', Trsc_ID='$tid', Phone='$phn', Email='$email' where User_ID='$user'";
        $data0=mysqli_query($conn,  $query0);
        if($data0)
        {
            echo "
                <script> 
                window.location.assign('display.php');
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
        //header('location:display.php');
        //$query3 = "UPDATE student SET  Reg_NO='".$regn."', Name='".$name."', SSC_Roll='".$sroll."', HSC_Roll='".$hroll.", Par_Add='".$par."', Pre_Add='".$pst."', Gender='".$gen."', Unit='".$unit."', Trsc_ID='".$tid."', Phone='".$phn."', Email='".$email."' where User_ID='".$user."'";
       /* $query3="UPDATE student SET Pre_Add='".$pst."' where User_ID='".$User."'";
        $data = mysqli_query($conn, $query3);

        if($data)
        {
            echo "
                <script> 
                alert('Updated Successfully');
                </script>
            ";
            header('location:display.php');
            $query2 = "SELECT * FROM student";

            $data2 = mysqli_query($conn, $query1);

            $d = mysqli_num_rows($data1);

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

            $User_id="JU_".$unit."_".$rand."_".$d;

            $query2="UPDATE student SET User_ID='".$User_id."' where Exam_ID='".$id."'";

            $done=mysqli_query($conn, $query2);
        }
        else
        {
            echo "
            <script> 
            alert('Update Failed');
            </script>
            ";
        }*/
    }
    //else{echo "Prblm";}
?> 