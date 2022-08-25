<?php

 class Animal
 {
    private $nom;
    private $age;
    private $type;

    public function __construct($nom,$age,$type){
        $this->nom = $nom;
        $this->age = $age;
        $this->type = $type;
    }

    public function getName(){return $this->nom;}
    public function getAge(){return $this->age;}
    public function getType(){return $this->type;}

    public function setName($name){$this->nom=$name;}
    public function setAge($age){$this->age=$age;}
    public function setType($type){$this->type=$type;}

   
    public function toString(){
        return "nom:$this->nom<br>age:$this->age<br>type:$this->type";
    }
 }


?>