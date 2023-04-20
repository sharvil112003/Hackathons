<?php
session_start(); 
include("connections.php");
if($_SERVER['REQUEST_METHOD']=="POST")
    {
        //something was posted
        $email_id=$_POST["email_id"];
        $password=$_POST["password"];

        if(!empty($email_id) && !empty($password))
        {
            //read database
            
            $query = "select * from login where email_id = '$email_id' limit 1";
            $result = mysqli_query($con,$query);
			if($result)
			{
				if($result && mysqli_num_rows($result)>0)
        		{
            		$user_data=mysqli_fetch_assoc($result);
            		if($user_data['password'] === $password)
					{
						$_SESSION['email_id'] = $user_data['email_id'];
						echo"Login Successfully";
						header("Location:index.php");
						die;
					}
        		}
			}

            echo "<script>alert('Wrong user name and password.')</script>";
        }
        else
        {
          echo "<script>alert('Wrong user name and password.')</script>";
        }
    }
?>




<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<link rel="stylesheet" href="css/login.css">
	

<div class="box">


    <div class="heading" ><b>Login Page</b></div>

    <div class="container2">
    <form method="post">
    <!-- <div class="container"> -->
    <h2>Email Id:</h2>
    <input id="text" type="email" name="email_id"><br>
    <!-- </div> -->

    <!-- <div class="container"> -->
        <h2 >Password:</h2>
        <input id="text" type="password" name="password"><br>
    <!-- </div> -->
    <br><br>
    <input id="button" type="submit" class="btn" value="Login">
    </div>

    </div>
</form>
</div>
</div>
</div>
</body>
</html>