<?php
 include_once '../Controller/chauffeurC.php';
 $co = new chauffeurC();
 if(isset($_GET['id'])){
     $co->supprimerChauffeur($_GET['id']);
 
    header('Location:backChauffeur.php');
    }

 ?>