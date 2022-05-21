<?php 
    session_start();
    include("config.php");
    include("scripts/reachaccess.php");
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

                <div class="row-sm-6">
                    <div class="shopping-item">
                        <a href="scripts/logout.php">Logout<span class="cart-amunt"></span> </a>
                    </div>
                </div>
                
                <div class="row-sm-6">
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
                        <li><a href="messages.php"> My Messages</a></li>
                        <li><a href="my_listings.php"> My Listings</a></li>
                        <li><a href="my_bids.php"> My Bids</a></li>
                        <li><a href="favs.php"> My Favorite Listings</a></li>
                        <li><a href="my_purchases.php"> My Purchases</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div>
    <br><br><br>
    <?php
    $username = $_SESSION['username'];

    $result = mysqli_query($con,"SELECT * FROM users WHERE username='$username' LIMIT 1");
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card p-3 py-4">
                    <div class="text-center"> <img src="img/<?php echo $row['image'] ?>" width="300" height="400" class="rounded-circle"> </div>
                        <div class="text-center mt-3"> <span class="bg-secondary p-1 px-4 rounded text-white"></span><br>
                        <label>First name:</label>
                        <h5 class="mt-2 mb-0"><?php echo $row['name'] ?></h5><br>
                        <label>Last name:</label>
                        <h5 class="mt-2 mb-0"><?php echo $row['surname'] ?></h5><br>
                        <label>Username:</label>
                        <h5 class="mt-2 mb-0"><?php echo $row['username'] ?><span></span><br><br>
                        <label>Phone:</label>
                        <h5 class="mt-2 mb-0"><?php echo $row['phone'] ?><span></span>
                    
                            
                        </div>
        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
    </body>
</html>