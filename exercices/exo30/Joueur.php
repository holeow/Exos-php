<?php

require './Arme.php';
class Joueur{

    private $nom;
    private $force;
    private $PV;
    private $arme;
    

    public function __construct( $nom, $force, $PV, $arme ){
        $this->nom = $nom;
        $this->force = $force;
        $this->arme = $arme;
        $this->PV = $PV;
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
     * Get the value of force
     */ 
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Set the value of force
     *
     * @return  self
     */ 
    public function setForce($force)
    {
        $this->force = $force;

        return $this;
    }

    /**
     * Get the value of PV
     */ 
    public function getPV()
    {
        return $this->PV;
    }

    /**
     * Set the value of PV
     *
     * @return  self
     */ 
    public function setPV($PV)
    {
        $this->PV = $PV;

        return $this;
    }

    /**
     * Get the value of arme
     */ 
    public function getArme()
    {
        return $this->arme;
    }

    /**
     * Set the value of arme
     *
     * @return  self
     */ 
    public function setArme($arme)
    {
        $this->arme = $arme;

        return $this;
    }


    public function __toString()
    {
        return "Nom:$this->nom<br>Force:$this->force<br>PV:$this->PV<br>Nom Arme:".$this->arme->getNom()."<br>Puissance Arme:".$this->arme->getPuissance();
    }
}
?>