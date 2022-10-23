<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style2.css" />

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
    <title>Admin Database</title>
</head>
<header>
      <a href="#" class="logo"><span>JU</span></a>

      <ul class="navbar">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">Addmission</a></li>
        <li><a href="Adminprofile.php">Profile</a></li>
      </ul>

      <div class="main">
        <a href="Adminlogout.php" class="user"><i class="ri-user-fill"></i>Log Out</a>
        <div class="bx bx-menu" id="menu-icon"></div>
      </div>
    </header>
    <script type="text/javascript" src="../js/script.js"></script>
    <?php
        include("connection.php");
        error_reporting(E_ERROR | E_PARSE);
        $query="SELECT * FROM admin_info";
        $data=mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);


        if($total != 0)
        {
            ?>
            <h2 align="center"> Displaying All Records  </h2>
            <center> <table border="1" cellspacing="11" width="80%">
            <tr>
                <th width="10%">User_Id</th>
                <th width="10%">Image</th>
                <th width="10%">Name</th>
                <th width="10%">Parmanent Address</th>
                <th width="10%">Present Address</th>
                <th width="5%">Gender</th>
                <th width="10%">Phone Number</th>
                <th width="10%">Email</th>
                <th width="12%">Operation</th>
            </tr>


            <?php
            while($result = mysqli_fetch_assoc($data))
            {
                echo "<tr>
                        <td>".$result[User_ID]."</td>
                        <td><img src='".$result[Ad_img]."' height='100px' width='100px'></td>
                        <td>".$result[Ad_Name]."</td>
                        <td>".$result[Par_Add]."</td>
                        <td>".$result[Pre_Add]."</td>
                        <td>".$result[Gender]."</td>
                        <td>".$result[Phone]."</td>
                        <td>".$result[Email]."</td>
                        <td> <a href='Admupdate.php?user=$result[User_ID]'> <input type='submit' value='Update' class='Update'> </a> 
                        <a href='delete.php?user=$result[User_ID]'> <input type='submit' value='Delete' class='Delete'> </a> </td>
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