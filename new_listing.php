<?php 
    session_start();
	include("config.php");
	include("scripts/reachaccess.php");
?>


<?php
    if (isset($_GET['Message'])) {
        print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
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
						<li class="active"><a href="new_listing.php"> Create New Listing</a></li>
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
	<div class="product-big-title-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="product-bit-title text-center">
						<h2>Create New Listing/Auction</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br><br>
	<center>
		
		<form action="scripts/add_product.php" method="post" enctype="multipart/form-data">
			<label>Name   </label>   
				<input type="text" name="name" placeholder="Name">
			<br>
			<br>
			<label for="listing">Type   </label>
				<select id="listing" name="listing">
					<option value="listing">Listing</option>
					<option value="auction">Auction</option>
				</select>
			<label for="category">Category   </label>
				<select id="category" name="category">
					<option value="Computer"> Computer </option>
					<option value="Mobile"> Mobile Phone </option>
					<option value="Watch"> Smart Watch </option>
				</select>
			<label for="condition">Condition   </label>
				<select id="condition" name="condition">
					<option value="New"> New </option>
					<option value="Used"> Used </option>
				</select>
			<label>Brand   </label>   
				<input type="text" name="brand" placeholder="Brand">
			<br>
			<br>
			<label>Description  </label><br>
				<textarea id="description" name="description" rows="4" cols="50" placeholder="Type description here...">
			
			</textarea><br><br>
			<label>Picture  </label>
				<input type="file" id="image" name="image" accept="image/png, image/jpeg">
			<br><br>
			<label>Price:</label>
				<input type="number" min="1" step="any" name="price" /><br><br>

			<input type="submit" class="btn btn-primary btn" value="Create New Product" name="submit">
		</form>
	</center>
	   
	
	<br>
	<br>


	</body>
</html>