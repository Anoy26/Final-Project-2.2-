<?php
 include '../php/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <title>Document</title>
</head>
<body>
    <video width="50%" id="MyCameraOpen"></video>
    <form action="" method="POST"><input type="text" name="text" id="text"></form>
    
    <script>
        //step 1 start camera section
        var video=document.getElementById("MyCameraOpen");
        var text=document.getElementById("text");

        var scanner = new Instascan.Scanner({
            video : video
        });
        Instascan.Camera.getCameras()
        .then(function(Our_Camera){
            if(Our_Camera.length > 0){
                scanner.start(Our_Camera[0]);
            }else{
                alert("camera failed")
            }
        })
        .catch(function(error){
            console.log("Error!! Please try again")
        })

       scanner.addListener('scan',function(input_value){
        text.value=input_value;

        document.forms[0].submit();
       })
    </script>
    
</body>
</html>
<?php

 if(isset($_POST['text'])){    
    $text=$_POST['text'];
    $ssql="insert into attendance values('$text','P')";;
    $qquery=mysqli_query($conn, $ssql);
    echo 'Changed';
 }
?>

