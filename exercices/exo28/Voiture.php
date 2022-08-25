<?php

 class Voiture
 {
    private $Modele, $Marque, $Couleur, $Annee;


    public function __construct($modele, $Marque, $Couleur, $Annee){
        $this->Modele = $modele;
        $this->Marque = $Marque;
        $this->Couleur = $Couleur;
        $this->Annee = $Annee;
    }


    /**
     * Get the value of Modele
     */ 
    public function getModele()
    {
        return $this->Modele;
    }

    /**
     * Set the value of Modele
     *
     * @return  self
     */ 
    public function setModele($Modele)
    {
        $this->Modele = $Modele;

        return $this;
    }

    /**
     * Get the value of Marque
     */ 
    public function getMarque()
    {
        return $this->Marque;
    }

    /**
     * Set the value of Marque
     *
     * @return  self
     */ 
    public function setMarque($Marque)
    {
        $this->Marque = $Marque;

        return $this;
    }

    /**
     * Get the value of Couleur
     */ 
    public function getCouleur()
    {
        return $this->Couleur;
    }

    /**
     * Set the value of Couleur
     *
     * @return  self
     */ 
    public function setCouleur($Couleur)
    {
        $this->Couleur = $Couleur;

        return $this;
    }

    /**
     * Get the value of Annee
     */ 
    public function getAnnee()
    {
        return $this->Annee;
    }

    /**
     * Set the value of Annee
     *
     * @return  self
     */ 
    public function setAnnee($Annee)
    {
        $this->Annee = $Annee;

        return $this;
    }

    public function toString(){
        return "Modèle:$this->Modele<br>Marque:$this->Marque<br>Couleur:$this->Couleur<br>Année:$this->Annee";
    }
 }


?>