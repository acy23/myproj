<?php 
    session_start();
    include("scripts/reachaccess.php"); 
    include("scripts/userdata.php"); 

?>
<?php
    if (isset($_GET['Message'])) {
        print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
    }
    
    if (isset($_GET['product_id'])){
        $product_id = $_GET['product_id'];
        $delete = mysqli_query($con,"DELETE FROM product WHERE product_id = $product_id");
        $Message = "Product deleted!";
        header("Location:my_listings.php?Message=" . urlencode($Message));
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
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="listings.php">Listings</a></li>
                        <li><a href="new_listing.php"> Create New Listing</a></li>
                        <li><a href="messages.php"> My Messages</a></li>
                        <li><a href="my_listings.php"> My Listings</a></li>
                        <li><a href="my_bids.php"> My Bids</a></li>
                        <li><a href="favs.php"> My Favorite Listings</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div>
    <br><br>
    <center><h2>My Listings</h2></center>
    <br><br>
    <?php
    $user_id = $user_data['id'];
    $sql = "SELECT * FROM product WHERE user_id=$user_id";
    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){

    ?>
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                
                <th scope="col">ID</th>
                <th scope="col">Brand</th>
                <th scope="col">Price</th>
                <th scope="col">Picture</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    
                    <td><a href="single-product.php"><?php echo $row['product_id'] ?></a></td>
                    <td><?php echo $row['brand'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><img src="img/<?php echo $row['image'] ?>" alt="" border=3 height=50 width=120></img></td>
                    <td><a href="my_listings.php?product_id=<?php echo $row['product_id'] ?>" class='btn btn-primary btn'>Delete</a></td>    
                    
                </tr>
            </tbody>
        </table>
        <br><br>
    </div>
    <?php } } ?>
    



    </body>
</html>