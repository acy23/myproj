<?php 
    session_start();
    include("../config.php");
    include("reachaccess.php");

    if (isset($_GET['product_id']) && isset($_GET['user_id'])){
        $product_id = $_GET['product_id'];
        $user_id = $_GET['user_id'];

        $sql1 = "insert into purchases (product_id,user_id) values ($product_id,$user_id)";
        $result = mysqli_query($con,$sql1);
        
        $mssg = "You successfully purchased the product!";
        header("Location:../listings.php?mssg=" . urlencode($mssg));

    }
    else{
        echo "Problem at url";
    }



?>    