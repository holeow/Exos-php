<?php
ob_start(); //  ne pas modifier
$titre = "Exo 17 - Les tableaux"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$marc = [16,17,15,20,19];
$matthieu = [0,1,7,1,4,3];

$moyenne = 0;
foreach($marc as $n){
    $moyenne += $n;
}
$moyenne /= count($marc);

echo "La moyenne de marc est de $moyenne <br>";

$moyenne = 0;
foreach($matthieu as $n){
    $moyenne += $n;
}
$moyenne /= count($matthieu);

echo "La moyenne de matthieu est de $moyenne<br>";

echo "Une fois arrondie:". round($moyenne,2);

?>


<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>