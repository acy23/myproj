<style>
  body {

    display: flex;

    justify-content: center;

    align-items: center;

    height: 100vh;

    flex-direction: column;

}

*{

    font-family: cursive;

    box-sizing: padding-box;

}

form {

    width: 1000px;

    border: 3px solid rgb(177, 142, 142);

    padding: 20px;


    border-radius: 20px;

}

h2 {

    text-align: center;

    margin-bottom: 40px;

}

input {

    display: block;

    border: 2px solid #ccc;

    width: 95%;

    padding: 10px;

    margin: 10px auto;

    border-radius: 5px;

}

label {

    color: #888;

    font-size: 18px;

    padding: 10px;

}

button {

    float: right;

    background: rgb(35, 174, 202);

    padding: 10px 15px;

    color: #fff;

    border-radius: 5px;

    margin-right: 10px;

    border: none;

}

button:hover{

    opacity: .10;

}

.error {

   background: #F2DEDE;

   color: #0c0101;

   padding: 10px;

   width: 95%;

   border-radius: 5px;

   margin: 20px auto;

}

h1 {

    text-align: center;

    color: rgb(134, 3, 3);

}

a {

    float: right;

    background: rgb(183, 225, 233);

    padding: 10px 15px;

    color: #fff;

    border-radius: 10px;

    margin-right: 10px;

    border: none;

    text-decoration: none;

}

a:hover{

    opacity: .7;

}


</style>

<?php
    if (isset($_GET['Message'])) {
        print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
    }
    
?>


<!DOCTYPE html>    
<html>
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="css/style.css">    
</head>    
<body>    
    <h2>Welcome Page</h2><br>    
    <div class="login">    
        <form method="post" action="scripts/logincheck.php">    
            <label><b>Username<br>   
            </b>    
            </label>    
            <input id="text" type="text" name="user_name" placeholder="Username">    
            <br><br>    
            <label><b>Password<br>     
            </b>    
            </label>    
            <input id="text" type="password" name="password" placeholder="Password">    
            <br><br>    
            <input id="button" type="submit" value="LOGIN" class="btn-login"/> 
            
            <br><br>       
            <br><br>    
            <a href="signup.php">Sign up!</a>  
        </form>     
    </div>    
</body>    
</html>