<?php
ob_start(); //  ne pas modifier
$titre = "Exo 14 - Les fonctions"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
function PGCD($numa,$numb){

    if($numa== $numb)return $numa;
    else {
        $bigger = $numa > $numb ? $numa : $numb;
        $lower = $numa > $numb ? $numb : $numa;

        return PGCD($bigger - $lower, $lower);
    }
}
$num1 = 48;
$num2 = 18;
echo "Le PGCD de $num1 et de $num2 est " . PGCD($num1,$num2);

?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>