<!DOCTYPE html>    
<html>
<style>
  body  
  {  
      margin: 0;  
      padding: 0;  
      background-color:#6abadeba;  
      font-family: 'Arial';  
  }  
  .login{  
          width: 382px;  
          overflow: hidden;  
          margin: auto;  
          margin: 20 0 0 450px;  
          padding: 80px;  
          background: #23463f;  
          border-radius: 15px ;  
            
  }  
  h2{  
      text-align: center;  
      color: #277582;  
      padding: 20px;  
  }  
  label{  
      color: #08ffd1;  
      font-size: 17px;  
  }  
  #Uname{  
      width: 300px;  
      height: 30px;  
      border: none;  
      border-radius: 3px;  
      padding-left: 8px;  
  }  
  #Pass{  
      width: 300px;  
      height: 30px;  
      border: none;  
      border-radius: 3px;  
      padding-left: 8px;  
        
  }  
  #log{  
      width: 300px;  
      height: 30px;  
      border: none;  
      border-radius: 17px;  
      padding-left: 7px;  
      color: blue;  
    
    
  }  
  span{  
      color: white;  
      font-size: 17px;  
  }  
  a{  
      float: right;  
      background-color: grey;  
  }
  #more {
    background:none;
    border:none;
    color:#FFF;
    font-family:Verdana, Geneva, sans-serif;
    cursor:pointer;
  }
</style>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="css/style.css">    
</head>    
<body>    
    <h2>Welcome Page</h2><br>    
    <div class="login">    
    <form id="login" method="get" action="login.php">    
        <label><b>Username<br>   
        </b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password<br>     
        </b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>    
        <a href="home.php"><input name="log" type="button" id="more" value="Login" onclick=""></a>   
        <br><br>    
        <input type="checkbox" id="check"> 
        <span>Remember me</span>    
        <br><br>    
        <a href="signup.php">Sign up!</a>  
    </form>     
</div>    
</body>    
</html>