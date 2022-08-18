<?php

use LDAP\Result;

 ob_start(); //  ne pas modifier
$titre = "Exo 13 - Les fonctions"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
function factorielle($num){
    $result = 1;
    for ($i=1; $i <= $num; $i++) { 
        $result *= $i;
    }
    return $result;
}

echo "la factorielle de 4 est : ". factorielle(4) . "<br>";
echo "la factorielle de 10 est : " . factorielle(10) . "<br>";
?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>