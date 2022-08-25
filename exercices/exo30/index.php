<?php
ob_start(); //  ne pas modifier
$titre = "Exo 30 - Manipuler 2 classes"; // Mettre le titre de la page
require "./Joueur.php";
//require "./Arme.php";
?>

<!-- mettre votre code ici -->
<?php

$j = new Joueur("hallo",5,5,new Arme("Hachette",2));
$j2 = new Joueur("Joueur 2",100,500,new Arme("Epée vorpale de la mort qui tue",100));
echo $j;
echo "<br>==================<br>";
echo $j2;

?>


<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>