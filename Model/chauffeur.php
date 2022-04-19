<?php
class chauffeur{
    private ?int $id = null;
    private ?string $nom = null;
    private ?string $email = null;
    private ?int $numtel = null;
    private ?string $adresse = null;
    private ?string $image = null;
    function __construct(string $nom,string $email,int $numtel,string $adresse,string $image)
    {
        
        $this->nom=$nom;
        $this->email=$email;
        $this->numtel=$numtel;
        $this->adresse=$adresse;
        $this->image=$image;
    }
    function getId(): int{
        return $this->id;
    }
    function getNom(): string{
        return $this->nom;
    }
   
    function getEmail(): string{
        return $this->email;
    }
    
    function getNumtel(): string{
        return $this->numtel;
    }
    function getAdresse(): string{
        return $this->adresse;
    }
    function getImage(): string{
        return $this->image;
    }
    function setNom(string $nom): void{
        $this->nom=$nom;
    }
    
    function setEmail(string $email): void{
        $this->email=$email;
    }
    function setNumtel(string $numtel): void{
        $this->numtel=$numtel;
    }
   
}
?>