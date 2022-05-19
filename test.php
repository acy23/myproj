<?php 
    session_start();
    include("scripts/reachaccess.php"); 
    include("scripts/userdata.php"); 


    $user_id = $user_data['id'];
    echo $user_id;
    $sql = "SELECT * FROM product WHERE user_id=$user_id";
    $result = mysqli_query($con,$sql);
    


?>