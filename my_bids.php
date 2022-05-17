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
                        <h1><a href="./home.php"><img src="img/logo.png"></a></h1>
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
                        <li class="active"><a href="home.php">Home</a></li>
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
    <center><h2>My Bids</h2></center>
    <br><br>
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                
                <th scope="col">ID</th>
                <th scope="col">Brand</th>
                <th scope="col">Last Bid</th>
                <th scope="col">My Last Bid</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                
                <td><a href="single-product.php">01</a></td>
                <td>Samsung</td>
                <td>4000</td>
                <td>3500</td>
            </tr>
            <tr>
                
                <td><a href="single-product.php">007</a></td>
                <td>Apple</td>
                <td>10000</td>
                <td>9100</td>
            </tr>
            <tr>
                <td><a href="single-product.php">999</a></td>
                <td>Nokia</td>
                <td>1500</td>
                <td>1500</td>
            </tr>
            </tbody>
        </table>
        <br><br>
    </div>



    </body>
</html>