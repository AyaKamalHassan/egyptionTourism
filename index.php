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




<!--...................... landing page.......................................... -->
<div class="landing-page">
        <div class="overlay"></div>
        <div class="container">
          <div class="header-area">
  <nav class="navbar navbar-expand-lg">
  <div class="container-fluid" style="margin: 0px 0px 0px -50px;">
    <img src="images/logo.png" style="width: 50px; height: 50px; border-radius: 50%;" alt="Site Logo">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home" style="color: white;">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="destination.php" style="color: white;">Destinations</a>
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

        <div class="introduction-text">
  <h1>Discover <span>Egypt</span></h1>
  <p>Explore the wonders of ancient history, pristine beaches, and vibrant culture. 
     From the Pyramids of Giza to the shores of the Red Sea, your Egyptian adventure awaits!</p>
  <a href="#destinations" class="btn btn-warning" style="color: rgb(252, 245, 245);">Explore Now</a>
</div>

</div>
        </div>
</div>

<!--......................end of landing page.......................................... -->




<!--.....................start about us......................................... -->


<section class="about-section py-5" id="about">
  <div class="container2 mt-5">
    <h2 class="mb-3 text-center">About <span>Egypt</span></h2>

    <div class="row align-items-center textsec2">

      <!-- Text Content -->
      <div class="col-lg-6 mb-4 mb-lg-0 text-center text-lg-start">
        <p>
          Welcome to Egypt — where ancient history meets breathtaking landscapes.
          From the Great Pyramids of Giza to the turquoise waters of the Red Sea,
          every corner of this land tells a timeless story.
        </p>
        <p>
          Our website helps you explore Egypt’s top destinations, cultural
          experiences, and unforgettable adventures.
        </p>
        <a href="about.html" class="btn btn-warning mt-3 btnsec2">Learn More</a>
      </div>

      <!-- Image -->
      <div class="col-lg-6 text-center imgsec2">
        <div class="img-wrapper">
          <img src="images/bg10.jpg" alt="Egypt Tourism" id="imgAbout">
          <div class="AboutDots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!--.....................start section 3......................................... -->
<section class="destinations py-5" id="destinations">
  <div class="container text-center">
    <h2 class="mb-5">Top <span>Destinations</span></h2>

    <div class="row g-4">

      <!-- Pyramids -->
      <div class="col-md-6 col-lg-3">
        <div class="destination-card">
          <img src="images/bg3.jpg" alt="Giza Pyramids">
          <h4>Giza Pyramids</h4>
          <a href="pyramids.html" class="btn btn-warning">Learn More</a>
        </div>
      </div>

      <!-- GEM Museum -->
      <div class="col-md-6 col-lg-3">
        <div class="destination-card">
          <img src="images/museum2.webp" alt="Grand Egyptian Museum">
          <h4>Egyptian Museum</h4>
          <a href="museum.html" class="btn btn-warning">Learn More</a>
        </div>
      </div>

      <!-- Aswan -->
      <div class="col-md-6 col-lg-3">
        <div class="destination-card">
          <img src="images/aswan.jpg" alt="Aswan">
          <h4>Aswan</h4>
          <a href="aswan.html" class="btn btn-warning">Learn More</a>
        </div>
      </div>

      <!-- Sharm El Sheikh -->
      <div class="col-md-6 col-lg-3">
        <div class="destination-card">
          <img src="images/bg9.jpg" alt="Sharm El Sheikh">
          <h4>Sharm El Sheikh</h4>
          <a href="sharm.html" class="btn btn-warning">Learn More</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="destination-card">
          <img src="images/bg6.jpg" alt="Sharm El Sheikh">
          <h4>Nile River</h4>
          <a href="sharm.html" class="btn btn-warning">Learn More</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="destination-card">
          <img src="images/bg.jpg" alt="Sharm El Sheikh">
          <h4>Tower Of Cairo</h4>
          <a href="sharm.html" class="btn btn-warning">Learn More</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="destination-card">
          <img src="images/bg11.jpg" alt="Sharm El Sheikh">
          <h4>Dahab</h4>
          <a href="sharm.html" class="btn btn-warning">Learn More</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="destination-card">
          <img src="images/bg4.jpg" alt="Sharm El Sheikh">
          <h4>Sina</h4>
          <a href="sharm.html" class="btn btn-warning">Learn More</a>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- -----------------------------start section 4------------------------------------------- -->

<!-- Egypt Map Section -->
<section class="egypt-map py-5" id="map">
  <div class="container text-center">

    <h2 class="mb-4">
      Discover <span style="color: gold;">Egypt</span> on the Map
    </h2>

    <p class="mb-4">
      Explore Egypt’s most famous destinations and plan your journey.
    </p>
    </div>
    </div>

    <div class="row bgframe align-items-center p-4">

      <!-- Text -->
      <div class="col-md-4 col-12 text mb-4 mb-md-0">
        <p class="map-text">
          Discover<br>
          <span style="color: gold;">Egypt</span><br>
          on the Map<br>
        </p>
      </div>

      <!-- Map -->
      <div class="col-md-6 col-12">
        <div class="map-frame ratio ratio-4x3">
          <iframe 
            src="https://www.google.com/maps?q=Egypt&output=embed"
            allowfullscreen
            loading="lazy">
          </iframe>
        </div>
      </div>

  </div>
</section>

<!-- -------------------------------section5 vr------------------------ -->
<!-- A-Frame Library MUST be loaded first -->
<script src="https://aframe.io/releases/1.4.0/aframe.min.js"></script>

<section class="vr-section py-5" id="vr">
  <div class="container text-center">
    <h2 class="mb-4">Explore Egypt in <span style="color: gold;">VR</span></h2>
    <p class="mb-4">Move around and explore this panoramic view.</p>
  </div>

  <div class="vr-container" style="width:100%; height:450px;">
    <a-scene embedded style="width:100%; height:100%;">
      <a-sky src="images/vr3.jpg" rotation="0 -90 0"></a-sky>
    </a-scene>
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








<script src="main.js"></script>
</body>
</html>