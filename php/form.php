<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registration</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container">
        <form action="#" method="POST" enctype="multipart/form-data">

            <div class="title">
                Registration Form
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

                <div class="input_feild">
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
                </div>

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

                <div class="input_feild">
                    <level>Phone Number</level>
                    <input type="text" class="input" name="phone" required>
                </div>

                <div class="input_feild">
                    <level>Email</level>
                    <input type="text" class="input" name="email" required>
                </div>

                <div class="input_feild terms">
                    <level class="check">
                        <input type="checkbox">
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
        $query1 = "SELECT * FROM student";

        $data1 = mysqli_query($conn, $query1);

        $total = mysqli_num_rows($data1);

        $id=$total+ 202301;

        $filename =  $_FILES["uploadfile"]["name"];
        $tempname =  $_FILES["uploadfile"]["tmp_name"];
        $folder = "images/".$filename;
        move_uploaded_file($tempname,$folder);

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
        
        $query = "INSERT INTO student (Exam_ID, Std_img, Name, Reg_NO, SSC_Roll,  HSC_Roll, Par_Add, Pre_Add, Gender, Unit, Trsc_ID, Phone, Email) VALUES('$id','$folder', '$name','$regn','$sroll', '$hroll','$par','$pst','$gen','$unit','$tid','$phn','$email')";
        $data = mysqli_query($conn, $query);

        if($data)
        {
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
    }
    //else{echo "Prblm";}
?> 