<?php

session_start();
if(isset($_SESSION['username'])){
    echo "you logged in as </br>", $_SESSION['username'];
    echo "<br/><a href='logout.php'>logout</a>";
}else{
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark py-4">
            <div class="container">
              <div class="col-3">
                <img src="img/resort_logo.png" class="img-fluid w-50 p-0" alt="">
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php" style="color: white">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="accommodation.php" style="color: white">Accomodations</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="facilityservices.php" style="color: white">Facilities & Other Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="gallery.php" style="color: white">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php" style="color: white">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php" style="color: white">Login</a>
                  </li>
                  <li class="nav-item">
                    <a href="booking.php">
                      <button type="button" class="btn btn-primary btn-lg fw-bold rounded-0">BOOK NOW</button>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </div>
        </nav>
    </div>