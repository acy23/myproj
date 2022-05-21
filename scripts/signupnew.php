<?php

    session_start();
    include("../config.php");
    include("reachaccess.php");

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
        if(isset($_POST['submit']) && isset($_FILES['image']))
        {

            $img_name = $_FILES['image']['name'];
            $img_size = $_FILES['image']['size'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $error = $_FILES['image']['error'];

        if ($error == 0){
            if ($img_size > 125000){
                $em = "Sorry, your file is too large.";
                echo $em;
                header("Location:../new_listing.php?error=$em");
            }
            else{
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);

                $allowed_exs = array("jpg", "jpeg", "png");

                if (in_array($img_ex_lc, $allowed_exs)){
                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_upload_path = '../img/'.$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
                    // Insert into Database
                    $sql2 = "INSERT INTO users (name,surname,email,username,passwrd,phone,image) VALUES ('$name', '$surname', '$email', '$username', $password , $phone ,'$new_img_name')";
                    $qq = mysqli_query($con, $sql2);

                    $result = mysqli_query($con, "SELECT * FROM users WHERE username='$username' LIMIT 1");
                    $row = mysqli_fetch_assoc($result);
                    $id = $row['id'];

                    $_SESSION["id"] = $id;
                    $_SESSION["username"] = $username;
                    $_SESSION["name"] = $name;
                    $_SESSION["surname"] = $surname;
                    $_SESSION["email"] = $email;
                    $_SESSION["phone"] = $phone;
                    $Message = "Your account has been created succesfully!";
                    header("Location: ../index.php?Message=" . urlencode($Message));
                }
                else {
                    $em = "You can't upload files of this type";
                    echo $em;
                    header("Location: ../signup.php?error=$em");
                }

            }
        }
        else{
            $err = "unknown error happened";
            echo $err;
            header("Location:../signup.php?error=$em");
        }
            
    
        }
    }
?>