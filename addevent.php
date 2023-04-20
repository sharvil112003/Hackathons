<?php

// @include 'config.php';
session_start(); 
include("connections.php");

if(isset($_POST['submit'])){

   $eventname = $_POST['eventname'];
   $eventcat = $_POST['eventcat'];
   $organisor = $_POST['organisor'];
   $link = $_POST['link'];
   $eventdate = $_POST['eventdate'];
   $College = $_POST['College'];
   $description = $_POST['description'];
   $select = " SELECT * FROM eventr WHERE eventname = '$eventname' && organisor = '$organisor' ";

   $result = mysqli_query($con, $select);


   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      
         $insert = "INSERT INTO eventr(eventname,eventcat,organisor,link,eventdate,College,description ) VALUES('$eventname','$eventcat','$organisor','$link','$eventdate','$College','$description')";
         mysqli_query($con, $insert);
         
         
        

    
         header('location:event.php');
      
   }

};


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Event Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
	
		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/1 (2).png" alt="">
				</div>
				<form action=""  method="POST">
					<h3>Event Registration</h3>
					<div class="form-group">
						<input type="text" placeholder="Event Name"  class="form-control" name="eventname" id="eventname" required>
						<input type="text" placeholder="Event Category" class="form-control" name="eventcat" id="eventcat" required>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Organising Club" class="form-control" name="organisor" id="organiser" required>
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Event Link (Individual)" class="form-control" name="link" id="link" required>
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="date" placeholder="Event Date" class="form-control" name="eventdate" id="eventdate" required>
						<i class="zmdi zmdi-calendar-note"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="College" class="form-control" name="College" id="College" required>
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Description of Event" class="form-control" name="description" id="description" required>
						<i class="zmdi zmdi-account"></i>
					</div>
				
					
					<!-- <div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control" name="password" id="password" required>
						<i class="zmdi zmdi-lock"></i>
					</div> -->
					<!-- <div class="form-wrapper">
						<input type="password" placeholder="re Password" class="form-control" name="re_pass" id="re_pass" required>
						<i class="zmdi zmdi-lock"></i>
					</div> -->
					<button name="submit" id="submit">Register Event
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>