<?php
include_once("C:/Users/jasse/Desktop/html\htdocs/jesser/config.php");
include_once("C:/Users/jasse/Desktop/html\htdocs/jesser/Model/chauffeur.php");
class chauffeurC
{
   

    function afficherChauffeur(){
        $sql="select * from chauffeur";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
    }
    catch(Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
}

public function ajouterChauffeur($chauffeur){
    $sql="insert into chauffeur(nom,email,numtel,adresse,image) values(:nom,:email,:numtel,:adresse,:image)";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute([
        'nom'=>$chauffeur->getNom(),
        'email'=>$chauffeur->getEmail(),
        'numtel'=>$chauffeur->getNumtel(),
        'image'=>$chauffeur->getImage(),
        'adresse'=>$chauffeur->getAdresse()
        ]);
        
    }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}




function modifierChauffeur($id,$chauffeur) {
    $sql="UPDATE  chauffeur set nom=:nom,numtel=:numtel,email=:email,image=:image,adresse=:adresse where id=".$id."";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
    
        $query->execute([
            'nom' => $chauffeur->getNom(),
            'numtel' => $chauffeur->getNumtel(),
            'email' => $chauffeur->getEmail(),
            'adresse' => $chauffeur->getAdresse(),
            'image' => $chauffeur->getImage()
        ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }		
  }
public function afficherChauffeurDetail(int $rech1)
    {
        $sql="select * from chauffeur where id=".$rech1."";
        
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
public function supprimerChauffeur($id)
{
    $sql = "DELETE FROM chauffeur WHERE id=".$id."";
    $db = config::getConnexion();
    $query =$db->prepare($sql);
    
    try {
        $query->execute();
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());

    }
}
}

?>