
<html>
<head>
    <link rel="stylesheet" href="display.css">
    <title>Display</title>
</head>
<?php
    include("connection.php");
    error_reporting(0);

    $query = "SELECT * FROM student";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);


    if($total != 0)
    {
        ?>
        <h2 align="center"><mark> Displaying All Records </mark> </h2>
        <center> <table border="1" cellspacing="11" width="85%">
        <tr>
            <th width="5%">Exam Roll</th>
            <th width="10%">User_Id</th>
            <th width="10%">Image</th>
            <th width="10%">Name</th>
            <th width="10%">Registration Number</th>
            <th width="5%">SSC Roll</th>
            <th width="5%">HSC Roll</th>
            <th width="10%">Parmanent Address</th>
            <th width="10%">Present Address</th>
            <th width="5%">Gender</th>
            <th width="5%">Unit</th>
            <th width="10%">Transaction Number</th>
            <th width="10%">Phone Number</th>
            <th width="10%">Email</th>
            <th width="30%">Operation</th>
        </tr>


        <?php
        while($result = mysqli_fetch_assoc($data))
        {
            echo "<tr>

                    <td>".$result[Exam_ID]."</td>
                    <td>".$result[User_ID]."</td>
                    <td><img src='".$result[Std_img]."' height='100px' width='100px'></td>
                    <td>".$result[Name]."</td>
                    <td>".$result[Reg_No]."</td>
                    <td>".$result[SSC_Roll]."</td>
                    <td>".$result[HSC_Roll]."</td>
                    <td>".$result[Par_Add]."</td>
                    <td>".$result[Pre_Add]."</td>
                    <td>".$result[Gender]."</td>
                    <td>".$result[Unit]."</td>
                    <td>".$result[Trsc_ID]."</td>
                    <td>".$result[Phone]."</td>
                    <td>".$result[Email]."</td>
                    <td> <a href='update.php?user=$result[User_ID]'> <input type='submit' value='Update' class='Update'> </a> 
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