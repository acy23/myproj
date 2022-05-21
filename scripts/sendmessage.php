<?php 
    session_start();
    include("../config.php");
    include("reachaccess.php");

    //variables
    $from_name = $_POST['name'];
    $from_email = $_POST['email'];
    $message = $_POST['message'];
    $to_user = $_POST['to_user'];
    $from_user = $_SESSION['id'];
    $product_id = $_POST['product_id'];

 
    if (isset($_POST['submit'])){

        $sql1 = "INSERT INTO messages (from_id,to_id,message,from_email,product_id) VALUES ($from_user,$to_user,'$message','$from_email',$product_id)";
        $result = mysqli_query($con,$sql1);
        $mssg = "Your_message successfully sent";
        header("Location: ../single-product.php?product_id=$product_id");

    }
    else {
        echo "smth went wrong..:(";
    }
?>