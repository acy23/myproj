<?php 
	session_start();
	include("../config.php");
	include("reachaccess.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//read from database

			$query = "select * from users where username = '$user_name' and passwrd = '$password' limit 1";
			$result = mysqli_query($con, $query);
			if($result)
			{
				if($result)
				{
					$user_data = mysqli_fetch_assoc($result);
					if($user_data['passwrd'] === $password)
					{
						$_SESSION["id"] = $user_data["id"];
						$_SESSION["username"] = $user_data["username"];
						$_SESSION["name"] = $user_data["username"];
						$_SESSION["surname"] = $user_data["surname"];
						$_SESSION["email"] = $user_data["email"];
						$_SESSION["phone"] = $user_data["phone"];
						$_SESSION["image"] = $user_data["image"];

  
                        header("Location:../index.php");
						die;
					}
				}
			}
			echo "wrong username or password!";
            header("Location:../welcome.php");
		}else
		{
			echo "wrong username or password!2";
            header("Location:../welcome.php");
		}
	}
?>
