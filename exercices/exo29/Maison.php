<?php
class Maison{
    private static $LastID = 1;

    private $ID;
    private $Date;
    private $NbChambres;
    private $Surface;

    public function __construct($Date,$NbChambres,$Surface){
        $this->ID = Maison::$LastID;
        Maison::$LastID++;
        $this->Date = $Date;
        $this->NbChambres = $NbChambres;
        $this->Surface = $Surface;
    }

    /**
     * Get the value of ID
     */ 
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Get the value of Date
     */ 
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * Set the value of Date
     *
     * @return  self
     */ 
    public function setDate($Date)
    {
        $this->Date = $Date;

        return $this;
    }

    /**
     * Get the value of NbChambres
     */ 
    public function getNbChambres()
    {
        return $this->NbChambres;
    }

    /**
     * Set the value of NbChambres
     *
     * @return  self
     */ 
    public function setNbChambres($NbChambres)
    {
        $this->NbChambres = $NbChambres;

        return $this;
    }

    /**
     * Get the value of Surface
     */ 
    public function getSurface()
    {
        return $this->Surface;
    }

    /**
     * Set the value of Surface
     *
     * @return  self
     */ 
    public function setSurface($Surface)
    {
        $this->Surface = $Surface;

        return $this;
    }

    public function toTR(){
        return "<tr>"."<td>".$this->getID()."</td>"."<td>".$this->getDate()."</td>"."<td>".$this->getNbChambres()."</td>"."<td>".$this->getSurface()."</td></tr>";
    }
}
?>