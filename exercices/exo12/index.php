<?php ob_start(); //  ne pas modifier
$titre = "Exo 12 - Les fonctions"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
function estpair($num){
    return $num%2==0;
}

echo "le nombre 5 est " . (estPair(5) ? 'pair' : 'impair') . "<br>";
echo "le nombre 122 est ". (estPair(122) ? 'pair' : 'impair') . "<br>";

?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>