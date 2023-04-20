
<?php
session_start(); 
include("connections.php");

//retrieve data from the login table
$query = "SELECT eventname,eventcat,organisor,link,eventdate,College,description1 FROM `eventr`";
$result = mysqli_query($con, $query);

     
     if(isset($_POST['data'])) {
         header("location:addevent.php");
     }
     
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Wide Cards Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/events.css">
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">ChatClub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active ">
              <!-- <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span> </a> -->
              <a class="nav-link" href="index.php ">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="events.php ">Events</a>
            </li>
            
            <li class="nav-item"></li>
              <a class="nav-link" href="#">About Us</a>
            </li>
            
            <li class="nav-item">
            <i class="zmdi zmdi-account"><a href="account.php">A</a></i>
            </li>
            <li class="nav-item"></li>
              <a class="nav-link" href="hospitals.pdf">About Us</a>
            </li>
            
          </ul>
          
         
        </div>
      </nav>
    </header>
    <!-- <div class="container">
      <form action="" method="post">
        <button name="data" >Add Events</button>
        </form>
      <div class="card">
        <div class="card-image" style="background-image: url('image1.jpg');"></div>
        <div class="card-content">
          <h2 class="card-title">Card Title 1</h2>
          <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus efficitur orci, vel sodales nulla semper ut. Nunc nec massa eget arcu pulvinar sollicitudin. Praesent vel arcu in sapien elementum auctor eget nec nibh. </p>
          <a href="#" class="card-link">Read More</a>
        </div>
      </div>
      <div class="card">
        <div class="card-image" style="background-image: url('image2.jpg');"></div>
        <div class="card-content">
          <h2 class="card-title">Card Title 2</h2>
          <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus efficitur orci, vel sodales nulla semper ut. Nunc nec massa eget arcu pulvinar sollicitudin. Praesent vel arcu in sapien elementum auctor eget nec nibh. </p>
          <a href="#" class="card-link">Read More</a>
        </div>
      </div>
      <div class="card">
        <div class="card-image" style="background-image: url('image3.jpg');"></div>
        <div class="card-content">
          <h2 class="card-title">Card Title 3</h2>
          <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus efficitur orci, vel sodales nulla semper ut. Nunc nec massa eget<p> -->

          <div class="container1">
          <form action="" method="post">
        <button name="data" >Add Events</button>
        </form>
<?php
while($row = mysqli_fetch_assoc($result)){
?>
<div class="container">
      <div class="card">
      <div class="card-image" style="background-image: url('images/image1.jpg');width:20vw;"></div>
      
      <div class="card-content">
      <h2 class="card-title"><?php echo $row['eventname']; ?></h2>
      <p class="card-description">
        <h4><b>Event Category : </b> :<?php echo $row['eventcat']; ?></h4>
        <p><b>College name : </b> :<?php echo $row['College']; ?></p>
        <p><b>Organisor : </b> :<?php echo $row['organisor']; ?></p>
        <p><b>Event Date : </b> :<?php echo $row['eventdate']; ?></p>
        <p><b>Event Link : </b> :<?php echo $row['link']; ?></p>
      <?php echo $row['description1']; ?></p>
      <a href="#" class="card-link">Read More</a>
  </div>
</div>
</div>
<?php
}
?>
</div>