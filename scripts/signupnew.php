<?php

    include("../config.php");

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phonenumber'];

    $sql = mysqli_query($con,"SELECT * FROM users where username='$username'");
    if(mysqli_num_rows($sql)>0)
    {
        echo "Username Already Exists";
        header("Location:../signup.php");

        exit;
    }
    else
    {
        if(isset($_POST['submit']))
        {

            $query="INSERT INTO users (name,surname,email,username,passwrd,phone,image) VALUES ('$name', '$surname', '$email', '$username', $password , $phone ,'')";
            $sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
            $Message = "You successfully recorded to db!!";
            header("Location: ../welcome.php?Message=" . urlencode($Message));
            
    
        }
    }
?>