<?php

include_once '../../Model/chauffeur.php';
include_once '../../Controller/chauffeurC.php';
$chauffeurC = new chauffeurC();
$listeC = $chauffeurC->afficherChauffeur();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Car Repair | About</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<!--[if lt IE 9]>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="bg">
  <header>
    <div class="main wrap">
      <h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1>
      <p>8901 Marmora, Glasgow <span>8 (800) 552 5975</span></p>
    </div>
    <nav>
      <ul class="menu">
        <li><a href="index.html" class="home"><img src="images/home.jpg" alt=""></a></li>
        <li class="current"><a href="about.html">About</a></li>
        <li><a href="maintenance.html">Maintenance</a></li>
        <li><a href="repair.html">Repair</a></li>
        <li><a href="price-list.html">Price List</a></li>
        <li><a href="locations.html">Locations</a></li>
      </ul>
      <div class="clear"></div>
    </nav>
  </header>
  <section id="content">
    <div class="sub-page">
      <div class="sub-page-left">
       
        <h2 class="top-1 p3">Drivers Team</h2>
        <p class="upper">voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit.</p>
        <div class="box-4">
        <?php
    foreach($listeC as $chauffeur){
        ?>
         
          <div class="last"> <img src="images/<?php echo $chauffeur['image']; ?>" alt=""> <a href="#" class="link"><?php echo $chauffeur['nom']; ?></a>
            <p>Email : <?php echo $chauffeur['email']; ?></p>
            <p>Numtel : <?php echo $chauffeur['numtel']; ?></p>
          </div>
          <?php } ?>
        </div>
        <a href="#" class="button">Read More</a> </div>
      <div class="sub-page-right">
        <div class="shadow bot-1">
          <h2 class="p2">Our Mission</h2>
          <p class="text-3 p2">Lorem ipsum dolor</p>
          <p class="upper">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero.</p>
        </div>
        <div class="box-5">
          <h2 class="p2">Specialization</h2>
          <p class="text-3 upper">AUTOMOTIVE INDUSTRY</p>
          <img src="images/page2-img5.jpg" alt="">
          <p class="upper">Aenean nec er Vestibulum ante ipsum primis in faucibus:</p>
          <ul class="list-1">
            <li><a href="#">Proin ullamcorper urna</a></li>
            <li><a href="#">Aenean auctor wisi et urna</a></li>
            <li><a href="#">Integer rutrum ante eu</a></li>
            <li><a href="#">Mauris accumsan nulla</a></li>
            <li><a href="#">orci luctus et ultrices</a></li>
          </ul>
          <a href="#" class="button-2">Read More</a> </div>
      </div>
    </div>
  </section>
  <footer>Car Repair &copy; 2045 | <a href="#">Privacy Policy</a> | Design by: <a href="http://www.templatemonster.com/">TemplateMonster.com</a></footer>
</div>
</body>
</html>