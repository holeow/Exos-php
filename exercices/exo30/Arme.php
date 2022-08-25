<?php
class Arme{
    private static $LastID = 1;
    private $ID;
    private $nom;
    private $puissance;

    public function __construct($nom,$puissance){
        $this->ID = self::$LastID;
        self::$LastID++;
        $this->nom = $nom;
        $this->puissance = $puissance;
    }

    

    /**
     * Get the value of ID
     */ 
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of puissance
     */ 
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set the value of puissance
     *
     * @return  self
     */ 
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }
}
?>