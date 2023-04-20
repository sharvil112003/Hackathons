<?php
session_start(); 
include("connections.php");

//retrieve data from the login table
$query = "SELECT college_name,club_name,city,description1 FROM `login` where college_name='PICT'";
$result = mysqli_query($con, $query);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">

    <title>VIIT Club</title>
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
          <a class="nav-link" href="about.html ">About</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="about.html ">Events </a>
        </li>
      </ul>
    </div>
  </nav>

</header>
<div class="container1">
<?php
while($row = mysqli_fetch_assoc($result)){
?>
<div class="container">
      <div class="card">
      <div class="card-image" style="background-image: url('images/image1.jpg');"></div>
      <div class="card-content">
      <h2 class="card-title"><?php echo $row['club_name']; ?></h2>
      <p class="card-description">
        <h4><b>College Name</b> :<?php echo $row['college_name']; ?></h4><br>
        <p><b>City</b> :<?php echo $row['city']; ?></p><br>
      <?php echo $row['description1']; ?></p>
      <a href="#" class="card-link">Read More</a>
  </div>
</div>
</div>
<?php
}
?>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>