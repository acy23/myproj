<?php 
    include("../config.php");
    include("reachaccess.php");

    if(isset($_POST['submit'])){
        $product_id = $_POST['product_id'];
        $user_id = $_SESSION['id'];
        $bid_amount = $_POST['bid'];
        
        $sql1 = "insert into bids (bid_amount,user_id,product_id) values ($bid_amount,$user_id,$product_id)";
        $result = mysqli_query($con,$sql1);
        if ($result){
            $mssg = "Your bid has been successfully placed!";
            header("Location:../listings.php?mssg=" . urlencode($mssg));
        }
        else{
            $mssg = "SQL does not work...";
            header("Location:../listings.php?mssg=" . urlencode($mssg));
        }
    }
    else{
        $mssg = "Something went wrong...";
        header("Location:../listings.php?mssg=" . urlencode($mssg));
    }


?>