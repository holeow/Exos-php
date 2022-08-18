<?php ob_start(); //  ne pas modifier
$titre = "Exo 7 - La boucle for"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$rand = rand(5,15);

echo "Voici la table de multiplication de : $rand";
echo "\n<br>\n";
echo "$rand x 1 =" . ($rand * 1);
echo "\n<br>\n";
echo "$rand x 2 =" . ($rand * 2);
echo "\n<br>\n";
echo "$rand x 3 =" . ($rand * 3);
echo "\n<br>\n";
echo "$rand x 4 =" . ($rand * 4);
echo "\n<br>\n";
echo "$rand x 5 =" . ($rand * 5);
echo "\n<br>\n";
echo "$rand x 6 =" . ($rand * 6);
echo "\n<br>\n";
echo "$rand x 7 =" . ($rand * 7);
echo "\n<br>\n";
echo "$rand x 8 =" . ($rand * 8);
echo "\n<br>\n";
echo "$rand x 9 =" . ($rand * 9);
echo "\n<br>\n";
echo "$rand x 10 =" . ($rand * 10);

?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>