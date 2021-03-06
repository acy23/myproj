<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
	body{  
		font-family: Calibri, Helvetica, sans-serif;  
		
	}  
	.container {  
		padding: 50px;  
		
	}  
		
	input[type=text], input[type=password], textarea {  
		width: 100%;  
		padding: 15px;  
		margin: 5px 0 22px 0;  
		display: inline-block;  
		border: none;  
		background: #f1f1f1;  
	}  
	input[type=text]:focus, input[type=password]:focus {  
		background-color: orange;  
		outline: none;  
	}  
	div {  
							padding: 10px 0;  
					}  
	hr {  
		border: 1px solid #f1f1f1;  
		margin-bottom: 25px;  
	}  
	.registerbtn {  
		background-color: #4CAF50;  
		color: white;  
		padding: 16px 20px;  
		margin: 8px 0;  
		border: none;  
		cursor: pointer;  
		width: 100%;  
		opacity: 0.9;  
	}  
	.registerbtn:hover {  
		opacity: 1;  
	}  
</style>  
</head>  
<body>  
    <form method="post" action="scripts/signupnew.php" enctype="multipart/form-data">
        <div class="container">  
            <center>  <h1> Sign Up</h1> </center>  
            <hr>  
            <label> Firstname: </label> 
            <input type="text" name="name" placeholder= "Firstname" size="15"/>   

            <label> Surname: </label>   
            <input type="text" name="surname" placeholder="Lastname" size="15"/>   

            <label> Username: </label>    
            <input type="text" name="username" placeholder="Username" size="10"required />

            <label> Password: </label>   
            <input type="password" name="password" placeholder="Password" size="15" required />

            <label> Email address: </label>   
            <input type="text" name="email" placeholder= "E-mail address" size="15" required />   

            <label> Phone Number: </label>   
            <input type="text" name="phonenumber" placeholder="Phone Number" size="15" required /><br>   

            <label for="avatar">Choose a profile picture:</label>
            <input type="file" id="image" name="image" accept="image/png, image/jpeg">

            <input type="submit" class="registerbtn" value="REGISTER" name="submit">
        </div>    
    </form>  
</body>  
</html> 
