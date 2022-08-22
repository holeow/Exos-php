<?php
ob_start(); //  ne pas modifier
$titre = "Exo 18 - Les tableaux"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$notes = [[16,5,18,14,12], [5,5,5,4], [20,19,5,14,17], [12,12,12,12,11]];

for ($i=0; $i < count($notes); $i++) { 
    $moyenne = 0;
    foreach($notes[$i] as $n){
        $moyenne += $n;
    }
    $moyenne /= count($notes[$i]);

    echo "La moyenne des notes de l'élève $i est de $moyenne<br>";
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