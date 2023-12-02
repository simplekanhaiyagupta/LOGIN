<?php
if(isset($_POST["submit"])){
    $n = $_POST['name'];
    $emai = $_POST['email'];
    $mobs = $_POST['message'];
    $con = mysqli_connect("localhost","root","","loginconnect");
    $sql="INSERT INTO  contacts(NAME,EMAIL,MESSAGE) VALUES ('$n','$emai','$mobs')";
    $res = mysqli_query($con,$sql);
    if($res){
        
    
        echo " scuesscfull";
    }
    else{
        echo "connection failed";
    }
}
?>