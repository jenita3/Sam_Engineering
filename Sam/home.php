<?php $page="home"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sam Engineering</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">

</head>
<body>
  <?php include 'nav.php' ?>
        
    
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="fab1.jpg" height="700px" width="100%"> 
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="fab2.jpg" height="700px" width="100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="fab3.jpg" height="700px" width="100%">
</div>

</div>
<script src="home.js"></script>
<div class="ss">
<br><br>
<h1 style="margin-top:750px;color: #171b4b;text-align: center;"> Services</h1>
<br>
<br>
<div class="services">
    <div class="boxes">
      <h3 style="color: #171b4b;text-align: center;">Roofing</h3>
    <img src="c2.jpg" >
    <p>Services are available as per quotation</p>
    <a href="roofing.php"><button >Know more</button></a>
  </div>

    <div class="boxes">
      <h3 style="color: #171b4b;text-align: center;">Mezannine Floors</h3>
    <img src="mfs.jpg" >
    <p>Services are available as per quotation</p>
    <a href="#"><button>Know more</button></a>
  </div>

  <div class="boxes">
    <h3 style="color: #171b4b;text-align: center;">Gates</h3>
    <img src="gts.jpg" >
    <p>Services are available as per quotation</p>
    <a href="gates.php"><button >Know more</button></a>
  </div>
  </div>
  <br><br><br>
    <div class="services"> 
  <div class="boxes">
    <h3 style="color: #171b4b;text-align: center;">Fencing</h3>
  <img src="fncs.jpg" >
  <p>Services are available as per quotation</p>
  <a href="#"><button >Know more</button></a>
</div>

<div class="boxes">
  <h3 style="color: #171b4b;text-align: center;">Railings</h3>
<img src="rls.jpg" >
<p>Services are available as per quotation</p>
<a href="#"><button >Know more</button></a>
</div>

<div class="boxes">
  <h3 style="color: #171b4b;text-align: center;">Skylight</h3>
<img src="skls.jpg" >
<p>Services are available as per quotation</p>
<a href="#"><button >Know more</button></a>
</div>

  </div>
  <br><br>
  </div>
  <?php include "footer.php" ?>

</body>
</html> 
