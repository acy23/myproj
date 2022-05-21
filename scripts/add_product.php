<?php
    session_start();
    include("../config.php");
    include("reachaccess.php");
    

    $listing = $_POST['listing'];
    $category = $_POST['category'];
    $condition = $_POST['condition'];
    $brand = $_POST['brand'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    //$image = $_POST['image'];

    $user_id = $_SESSION['id'];

    if ($listing == "auction"){
        $is_auction = 1;
        $is_listing = 0;
        
    }
    else{
        $is_auction = 0;
        $is_listing = 1;
    }
    if (isset($_POST['submit']) && isset($_FILES['image'])){
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
                    echo $listing;
                    echo $category;
                    echo $condition;
                    echo $brand;
                    echo $new_img_name;
                    echo $description;
                    echo $is_listing;
                    echo $is_auction;
                    echo $price;
                    echo $user_id;
                    echo $name; 
                    // Insert into Database
                    $sql = "INSERT INTO product (category,conditionn,brand,image,description,is_listing,is_auction,price,user_id,name)
                            VALUES ('$category','$condition','$brand','$new_img_name','$description',$is_listing,$is_auction,$price,$user_id,'$name')";
                    $qq = mysqli_query($con, $sql);

                    $Message = "Product successfully created. You can check it here!";
                    header("Location: ../my_listings.php?Message=" . urlencode($Message));
                }
                else {
                    $em = "You can't upload files of this type";
                    echo $em;
                    header("Location: ../new_listing.php?error=$em");
                }

            }
        }
        else{
            $err = "unknown error happened";
            echo $err;
            header("Location:../new_listing.php?error=$em");
        }


    }

?>