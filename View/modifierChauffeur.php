<link rel="stylesheet" href="style.css" type="text/css" media="all" />
<?php
 include_once '../Controller/chauffeurC.php';
 
 $co = new chauffeurC();
 if(isset($_GET['id'])){
   $chauffeurC = new chauffeurC();
   $listeC = $chauffeurC->afficherChauffeurDetail($_GET['id']);
 
 foreach($listeC as $chauffeur){
 ?>
 <body>
<!--<link rel="stylesheet" href="css3/style.css" type="text/css" media="all" />-->


  <div class="shell">
    <!-- Logo + Top Nav -->
    <div id="top">
      <h1><a href="#">Antico</a></h1>
  </div>
   <form action="#" method="post">
   <!-- Box -->
   <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2>Add New Event</h2>
          </div>
          <!-- End Box Head -->
            <!-- Form -->
            <div class="form">
              <p> 
                <label>Nom </label>
                <input type="text" class="field size1" name="nom" value=<?php echo $chauffeur['nom'];?> />
              </p>
             
              <p> 
                <label>Email </label>
                <input type="email" class="field size1" name="email" value=<?php echo $chauffeur['email'];?> />
              </p>
              
              <p> 
                <label>Numtel </label>
                <input type="number" class="field size1" name="numtel" value=<?php echo $chauffeur['numtel'];?> />
              </p>
              <p> 
                <label>Adresse </label>
                <input type="text" class="field size1" name="adresse" value=<?php echo $chauffeur['adresse'];?> />
              </p>
              <p> 
                <label>Image </label>
                <input type="file" class="field size1" name="image" value=<?php echo $chauffeur['image'];}?> />
              </p>

             

             
            </div>
            <!-- End Form -->
            <!-- Form Buttons -->
            <div class="buttons">
              <input type="Reset" class="button" value="Reset" />
              <input type="submit" class="button" value="submit" />
            </div>
            <!-- End Form Buttons -->
          </form>
 </div>
 </div>
 <?php
 // create event
 $chauffeur = null;

 // create an instance of the controller

 $chauffeurC = new chauffeurC();
 if (
     isset($_POST["nom"]) && 
     isset($_POST["email"]) &&
     isset($_POST["numtel"])&& 
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
        $chauffeurC->modifierChauffeur($_GET['id'],$chauffeur);
         
         header('Location:backChauffeur.php');
     }
     else
         $error = "Missing information";
 }

 
}

?>