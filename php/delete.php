<?php
    include("connection.php");
    error_reporting(E_ERROR | E_PARSE);
    $user=$_GET[user];
    $query2 = "DELETE  FROM student where User_ID='$user'";
    $data = mysqli_query($conn, $query2);

    if($data)
    {
        echo "
                <script> 
                window.location.assign('display.php');
                alert('Deleted Successfully');
                </script>
            ";
    }
    else
        {
            echo "
            <script> 
            window.location.assign('display.php');
            alert('Delate Failed');
            </script>
            ";
        }
?>