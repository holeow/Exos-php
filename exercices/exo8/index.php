<?php ob_start(); //  ne pas modifier
$titre = "Exo 8 - La boucle for"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$rand = rand(5,15);

echo "Le nombre de base est $rand";
echo "\n<br>\n";
$total = 0;
for ($i=$rand; $i > 0 ; $i--) { 
    $total+=$i;
    echo "Etape ".(($rand - $i) +1)." - résultat = $total";
    echo "\n<br>\n";
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