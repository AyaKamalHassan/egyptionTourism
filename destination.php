<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/1cd6bebb2c.js" crossorigin="anonymous"></script>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">

    <title>Document</title>
    <style>
body{
 background: linear-gradient(135deg, #b19128ff, #d8c98eff, #c9a227);
    min-height: 100vh;}
nav {
  position: relative;
  z-index: 2;
}

nav .nav-link {
     transition: 0.3s;
  }
nav .nav-link:hover {    
color: goldenrod!important;
  text-decoration: underline;
    }

      </style>
</head>
<body>

      
<?php
$conn = mysqli_connect("localhost:3307", "root", "", "tourism",3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM destination";
$result = mysqli_query($conn, $sql);
?>

 <nav class="navbar navbar-expand-lg">
  <div class="container-fluid" style="margin: 0px 0px 0px -50px;">
    <img src="images/logo.png" style="width: 50px; height: 50px; border-radius: 50%; margin-left:100px" alt="Site Logo">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: white;">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#destinations" style="color: white;">Destinations</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false" style="color: white;">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#historical">Historical Places</a></li>
            <li><a class="dropdown-item" href="#beaches">Beaches</a></li>
            <li><a class="dropdown-item" href="#adventures">Adventure Trips</a></li>
            <li><a class="dropdown-item" href="#museums">Museums</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#hotels" style="color: white;">Hotels & Resorts</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#contact" style="color: white;">Contact Us</a>
        </li>

      </ul>

    

    </div>
  </div>
</nav>


<section class="destinations py-5" id="destinations">
  <div class="container text-center">
    <h2 class="mb-5">Our Destinations</h2>

    <div class="row g-4">

      <?php  
      if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
              echo '
              <div class="col-md-6 col-lg-3">
                <div class="destination-card">
                  <img src="images/'.$row["image"].'" alt="'.$row["name"].'">
                  <h3>'.$row["name"].'</h3>
                  <p>'.$row["description"].'</p>
                     <a href="#" class="btn btn-warning">Details</a>

                </div>
              </div>
              ';
          }
      } else {
          echo "<p>No destinations found</p>";
      }
      ?>

    </div>
  </div>
</section>


<!-- ............................. Footer Section ............................. -->
<footer class="footer-section">
  <div class="container">
    <div class="row">
      <!-- Column 1: About -->
      <div class="col-lg-4 col-md-6 mb-4">
        <h3 class="footer-heading"><span>Egypt</span> Tourism</h3>
        <p class="footer-text">
          Discover the land of pharaohs. We provide the best tours and travel experiences across Egypt.
          From ancient history to modern adventures.
        </p>
      </div>

      <!-- Column 2: Quick Links -->
      <div class="col-lg-2 col-md-6 mb-4">
        <h4 class="footer-heading">Quick Links</h4>
        <ul class="list-unstyled footer-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="destination.php">Destinations</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>

      <!-- Column 3: Contact Info -->
      <div class="col-lg-3 col-md-6 mb-4">
        <h4 class="footer-heading">Contact Us</h4>
        <ul class="list-unstyled footer-contact">
          <li><i class="fas fa-map-marker-alt"></i> Cairo, Egypt</li>
          <li><i class="fas fa-phone"></i> +20 123 456 7890</li>
          <li><i class="fas fa-envelope"></i> info@egypttourism.com</li>
        </ul>
      </div>

      <!-- Column 4: Social Media -->
      <div class="col-lg-3 col-md-6 mb-4">
        <h4 class="footer-heading">Follow Us</h4>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>

    <hr class="footer-divider">

    <div class="row">
      <div class="col-md-12 text-center">
        <p class="copyright-text">
          &copy; 2023 Egypt Tourism. All rights reserved. | Designed with <span style="color: gold;">&hearts;</span>
        </p>
      </div>
    </div>
  </div>
</footer>


    
</body>
</html>