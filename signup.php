<?php
session_start(); 
include("connections.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $college_name = $_POST["college_name"];
    $club_name = $_POST["club_name"];
    $city = $_POST["city"];
    $email_id = $_POST["email_id"];
    $password = $_POST["password1"];
    $password1 = $_POST["password2"];
    $description1 = $_POST["description1"];
    if (!empty($college_name) && !empty($password) && !empty($password1) && !empty($club_name)&& !empty($email_id)&& !empty($description1)) {
      //read database
      if ($password === $password1) {
        $query = "INSERT INTO `login` ( `college_name`, `club_name`,`city`, `email_id`, `password`,`description1`) VALUES ( '$college_name','$club_name', '$city','$email_id', '$password','$description1')";
        mysqli_query($con, $query);
        header("location:login.php");
  
      } else {
        echo "<script>alert('Please fill all the details!');</script>";
      }
    }
    else
    {
        echo "<script>alert('Invalid Entries!');</script>";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<link rel="stylesheet" href="css/signup.css">

<div class="box">


    <div class="heading" ><b>REGISTRATION</b></div>
    <div class="container">
    <div class="container1">
        <img class="inputbox" src="images/image1.jpg">
    </div>

    <div class="container2">
    <form method="post">
    <!-- <div class="container"> -->
    <h2> <b>College Name:</b></h2>
    <input class="box2 inputbox" id="text" type="text" name="college_name"><br>
    <!-- </div> -->

    <!-- <div class="container"> -->
    <h2>Club Name:</h2>
    <input id="text" type="text" name="club_name"><br>
    <!-- </div> -->

    <!-- <div class="container"> -->
    <h2>City:</h2>
    <input id="text" type="text" name="city"><br>
    <!-- </div> -->

    <!-- <div class="container"> -->
    <h2>Email Id:</h2>
    <input id="text" type="email" name="email_id"><br>
    <!-- </div> -->

    <!-- <div class="container"> -->
        <h2 >Password:</h2>
        <input id="text" type="password" name="password1"><br>
    <!-- </div> -->

    <!-- <div class="container"> -->
        <h2>Confirm  Password:</h2>
        <input id="text" type="password" name="password2"><br>
    <!-- </div> -->
     <!-- <div class="container"> -->
     <h2>Description about the club:</h2>
        <input id="description1" type="text" name="description1"><br>
    <!-- </div> -->
    <br><br>
    <input id="button" type="submit" class="btn" value="Sign Up">
    </div>

    </div>
</form>
</div>
</body>
</html>
