<?php

include_once '../Model/chauffeur.php';
include_once '../Controller/chauffeurC.php';
$chauffeurC = new chauffeurC();
$listeC = $chauffeurC->afficherChauffeur();

$chauffeurC = new chauffeurC();
if (
    isset($_POST["nom"]) && 
    isset($_POST["email"]) &&
    isset($_POST["numtel"]) && 
    isset($_POST["adresse"]) &&
    isset($_POST["image"])
) {
    if (
        !empty($_POST["nom"]) && 
        !empty($_POST["email"]) &&
        !empty($_POST["numtel"]) && 
        !empty($_POST["adresse"]) &&
        !empty($_POST["image"])
    ) {
        $chauffeur = new chauffeur(
            $_POST['nom'],
            $_POST['email'],
            $_POST['numtel'],
            $_POST['adresse'],
            $_POST['image']
        );
        if(strlen($_POST['numtel'])!=8){
          echo "<script>alert('Numero de telephone doit etre sur 8 chiffres veuillez ressayer...')</script>";
        }
        else{
        $chauffeurC->ajouterChauffeur($chauffeur);
        
        header('Location:backChauffeur.php');}}
        
    else
        $error = "Missing information";
}

?>


<link rel="stylesheet" href="style.css" type="text/css" media="all" />

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SpringTime</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />


</head>
<script src="js/saisie.js"></script>
<body>
<!--<link rel="stylesheet" href="css3/style.css" type="text/css" media="all" />-->
<!-- Header -->
<div id="header">
  <div class="shell">
    <!-- Logo + Top Nav -->
    <div id="top">
      <h1><a href="#">TShop</a></h1>
      <div id="top-navigation"> </a> </span> <a href="logout.php">Log out</a> </div>
    </div>
    <!-- End Logo + Top Nav -->
    <!-- Main Nav -->
    <div id="navigation">
      <ul>
        <li><a href=".php" class="active"><span>Gestion admins</span></a></li>
       
        <li><a href=".php" class="active"><span>Gestion produits</span></a></li>
      
      </ul>
    </div>
    <!-- End Main Nav -->
  </div>
</div>
<!-- End Header -->
<!-- Container -->
<div id="container">
  <div class="shell">
    <!-- Small Nav -->
    <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;</span> Current Articles </div>
    <!-- End Small Nav -->
    <!-- Message OK -->
    
    <!-- End Message OK -->
    <!-- Message Error -->
    
    <!-- End Message Error -->
    <br />
    <!-- Main -->
    <div id="main">
      <div class="cl">&nbsp;</div>
      <!-- Content -->
      <div id="content">
        <!-- Box -->
       
          <!-- Box Head -->
          <div class="box-head">
            <h2 class="left">Current Accounts</h2>
            <div class="right">
            
            </div>
          </div>
          
          <!-- End Box Head -->
          <!-- Table -->
          <div class="table">
          
            <table width="100%" border="0" cellspacing="0" cellpadding="0" >
        
              <tr>
               
                <th>ID</th>
                <th>Nom</th>
            
                <th>Email</th>
                <th>Numtel</th>
            
            <th>Adresse</th>
            <th>Image</th>
              
               
              </tr>

              

              <?php
    foreach($listeC as $chauffeur){
        ?>


              <tr>
                <td><?php echo $chauffeur['id']; ?></td>
                <td><?php echo $chauffeur['nom']; ?></td>
                 
                <td><?php echo $chauffeur['email']; ?></td>
                <td><?php echo $chauffeur['numtel']; ?></td>  
                <td><?php echo $chauffeur['adresse']; ?></td>
                <td><img  src="front/images/<?php echo $chauffeur['image']; ?>"width="50" height="60">
</td>
               
                <td><a href="supprimerChauffeur.php?id=<?php echo $chauffeur['id']; ?>" class="ico del">Delete</a> </td>
                <td> <a href="modifierChauffeur.php?id=<?php echo $chauffeur['id']; ?>" class="ico edit">Edit</a>
               
              
              
              
              </td>
              </tr>
              <?php } ?>
              
              
              
              
              
              
            
           
            </table>
            <!-- End Pagging -->
          </div>
          <!-- Table -->
      
        <!-- End Box -->
        <!-- Box -->
        <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2>Add New Event</h2>
          </div>
          <!-- End Box Head -->
          <form action="#" method="post">
            <!-- Form -->
            <div class="form">
              <p> 
                <label>Nom </label>
                <input type="text" class="field size1" name="nom" id="nom"/>
              </p>
              

              <p> 
                <label>Email </label>
                <input type="email" class="field size1" name="email" id="email" />
              </p>
              

              <p> 
                <label>Numtel </label>
                <input type="number" class="field size1" name="numtel" id="numtel" />
              </p>
              <p> 
                <label>Adresse </label>
                <input type="texte" class="field size1" name="adresse" id="adresse" />
              </p>
              <p> 
                <label>Image </label>
                <input type="file" class="field size1" name="image" id="image" />
              </p>
            </div>
            <!-- End Form -->
            <!-- Form Buttons -->
            <div class="buttons">
              <input type="Reset" class="button" value="Reset" />
              <input type="submit" class="button" value="submit" onclick="verif();"/>
            </div>
            <!-- End Form Buttons -->
          </form>
        </div>
        <!-- End Box -->
      </div>
      <!-- End Content -->
      <!-- Sidebar -->
      <div id="sidebar">
        <!-- Box -->
        <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2>Management</h2>
          </div>
          <!-- End Box Head-->
          <div class="box-content"> <a href="#" class="add-button"><span>Add new Article</span></a>
            <div class="cl">&nbsp;</div>
            <p class="select-all">
              <input type="checkbox" class="checkbox" />
              <label>select all</label>
            </p>
            <p><a href="#">Delete Selected</a></p>
           
          </div>
        </div>
        <!-- End Box -->
      </div>
      <!-- End Sidebar -->
      <div class="cl">&nbsp;</div>
    </div>
    <div id="piechart"> </div>
    <!-- Main -->
  </div>
</div>



<!-- End Container -->
<!-- Footer -->
<div id="footer">
  <div class="shell"> <span class="left">&copy; 2010 - CompanyName</span> <span class="right"> Design by <a href="http://chocotemplates.com">Chocotemplates.com</a> </span> </div>
</div>
<!-- End Footer -->





</body>
</html>
