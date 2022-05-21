<?php
    session_start();
    include("config.php");
    include("scripts/reachaccess.php");
?>
<?php
    if (isset($_GET['Message'])) {
        print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
    }
    
    if (isset($_GET['message_id'])){
        $message_id = $_GET['message_id'];
        $delete = mysqli_query($con,"DELETE FROM messages WHERE message_id = $message_id");
        $Message = "Message deleted!";
        header("Location:messages.php?Message=" . urlencode($Message));
    }


?>


<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ezBUY</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

   </head>
    <body>
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./index.php"><img src="img/logo.png"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="profile.php">Profile<span class="cart-amunt"></span> </a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="listings.php">Listings</a></li>
                        <li><a href="new_listing.php"> Create New Listing</a></li>
                        <li class="active"><a href="messages.php"> My Messages</a></li>
                        <li><a href="my_listings.php"> My Listings</a></li>
                        <li><a href="my_bids.php"> My Bids</a></li>
                        <li><a href="favs.php"> My Favorite Listings</a></li>
                        <li><a href="my_purchases.php"> My Purchases</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div>
    <br><br>
    <center><h2>Messages</h2></center>
    <br><br>

    <div class="container">
        <table class="table table-striped">
            <thead>

            <tr>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Username</th>
                <th scope="col">Product</th>
                <th scope="col">Message</th>
            </tr>
            </thead>
            <?php
            $user_id = $_SESSION['id'];
            $sql = "SELECT * FROM messages WHERE to_id=$user_id";
            $result = mysqli_query($con,$sql);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $sender_id = $row['from_id'];
                    $sql2 = "SELECT * FROM users WHERE id=$sender_id";
                    $result2 = mysqli_query($con,$sql2);
                    $row2= mysqli_fetch_array($result2);
            ?>
            <tbody>
                <tr>                
                    <td><?php echo $row2['name'] ?></td>
                    <td><?php echo $row2['surname'] ?></td>
                    <td><?php echo $row2['username'] ?></td>
                    <td><a href="single-product.php?product_id=<?php echo $row['product_id'] ?>"><?php echo $row['product_id'] ?></td>
                    <td><?php echo $row['message'] ?></td>
                    <td><a href="messages.php?message_id=<?php echo $row['message_id'] ?>" class='btn btn-primary btn'>Delete</a><br></td>
                </tr>
            </tbody>
            <?php } } ?>
        </table>
    </div>



    </body>
</html>