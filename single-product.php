<?php 
    session_start();
    include("config.php");
    include("scripts/reachaccess.php");

?>
<?php
    
    if (isset($_GET['product_id'])){
        $product_id = $_GET['product_id'];

        $result = mysqli_query($con,"SELECT * FROM product WHERE product_id = $product_id limit 1");
        $row = mysqli_fetch_array($result);

        //assign variables for product
        $name = $row['name'];
        $price = $row['price'];
        $description = $row['description'];
        $category = $row['category'];
        $condition = $row['conditionn'];
        $brand = $row['brand'];
        $image = $row['image'];
        $is_listing = $row['is_listing'];
        $is_auction = $row['is_auction'];
        $created_at = $row['created_at'];
        $user_id = $row['user_id'];

        $result2 = mysqli_query($con,"SELECT * FROM users WHERE id = $user_id limit 1");
        $row2 = mysqli_fetch_array($result2);
        $seller_username = $row2['username'];
        //assign variables for user

        $id = $_SESSION['id'];
        $result3 = mysqli_query($con,"SELECT * FROM users WHERE id = $id limit 1");
        $row3 = mysqli_fetch_array($result3);

        $sql4 = "SELECT * FROM bids WHERE product_id=$product_id ORDER BY (bid_amount) DESC";
        $result4 = mysqli_query($con,$sql4);
        $firstrow = mysqli_fetch_assoc($result4);
        $highest_bid = $firstrow['bid_amount'];


        $user_name = $_SESSION['name'];
        $username = $_SESSION['username'];
        $user_email = $_SESSION['email'];
        $user_phone = $_SESSION['phone'];

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
    </div>  <!-- End site branding area -->
    
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
    </div><!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Single Product</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">    
                
                <div class="col-md-8">
                    <div class="product-content-right">                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="img/<?php echo $image ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $name ?></h2>
                                        <?php if($is_listing ==1): ?>
                                            <div class="product-inner-price">
                                                <ins>Price: <?php echo $price ?>$ </ins> 
                                            </div>                                 
                                        <?php elseif($is_auction ==1): ?>
                                            <div class="product-inner-price">
                                                <ins>Highest bid: <?php echo $highest_bid ?>$ </ins>
                                            </div>   
                                        <?php endif; ?>
                                    <div class="product-inner-category">
                                        <p>Product ID: <?php echo $product_id ?> , Listing date: <?php echo $created_at ?> </p>
                                        <br>
                                        <p>Seller username: <?php echo $seller_username ?></p>
                                        <?php if($is_auction==1): ?>
                                            <p>Previous Bids: </p>
                                            <?php while($ress=mysqli_fetch_assoc($result4)){
                                                $bid = $ress['bid_amount'];

                                            ?>
                                            <p><?php echo $bid ?></p> 
                                            <?php } ?>
                                        <?php endif; ?>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Contact Seller</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                              
                                                <div class="submit-review">
                                                    <form method="post" action="scripts/sendmessage.php">
                                                        <p><label for="product_id"></label> <input name="product_id" type="hidden" value="<?php echo $product_id ?>"></p>
                                                        <p><label for="to_user"></label> <input name="to_user" type="hidden" value="<?php echo $user_id ?>"></p>
                                                        <p><label for="name">Name</label> <input name="name" type="text" value="<?php echo $username ?>"></p>
                                                        <p><label for="email">Email</label> <input name="email" type="email" value="<?php echo $user_email ?>"></p>
                                                    
                                                        <p><label for="review">Message</label> <textarea name="message" id="message" cols="30" rows="10"></textarea></p>
                                                        <p><input type="submit" value="Submit" name="submit"></p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    
                    </div>                    
                </div>
            </div>
        </div>
    </div>
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
  </body>
</html>