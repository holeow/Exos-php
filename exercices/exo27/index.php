<?php
ob_start(); //  ne pas modifier
$titre = "Exo 27 - Les objets"; // Mettre le titre de la page
require './Animal.php';
?>

<a href="?type=tous" class="waves-effect waves-light btn">Tous</a>
<a href="?type=chien" class="waves-effect waves-light btn">Chiens</a>
<a href="index.php?type=chat" class="waves-effect waves-light btn">Chats</a>
<a href="index.php" class="waves-effect waves-light btn red accent-2">Reset</a>

<div class="divider"></div>


<!-- mettre votre code ici -->
<?php
$table = [
    new Animal('Rantanplan',10,'chien'),
    new Animal('Garfield',2,'chat'),
    new Animal('Mabrouk',12,'chien'),
    new Animal('Miaou',5,'chat')
];

if(isset($_GET["type"])){
    $type = $_GET["type"];
    if($type == "tous"){
        foreach($table as $val){
            echo $val->toString();
            echo '<br>============<br>';
        }
    }
    elseif($type == "chien"){
        foreach($table as $val){
            if($val->getType() == "chien"){
                echo $val->toString();
                echo '<br>============<br>';
            }
            
        }
    }
    elseif($type == "chat"){
        foreach($table as $val){
            if($val->gettype() == "chat"){
                echo $val->toString();
                echo '<br>============<br>';
            }
            
        }
    }
}


?>



<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>