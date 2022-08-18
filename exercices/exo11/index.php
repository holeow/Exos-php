<?php ob_start(); //  ne pas modifier
$titre = "Exo 11 - Les boucles for et while"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$nombre = 815;
$essais = 1;


$rand = rand(100,999);
echo "Tirage $essais : $rand";
echo "\n<br>\n";
while($rand != $nombre){
    $essais++;
    $rand = rand(100,999);
    echo "Tirage $essais : $rand";
    echo "\n<br>\n";
}
echo "♥♥♥♥♥♥ $nombre trouvé en $essais essais";
echo "\n<br>\n";

$rand=-1;
for ($essais=1; $rand != $nombre ; $essais++) { 
    $rand = rand(100,999);
    echo "Tirage $essais : $rand";
    echo "\n<br>\n";
}
$essais--;
echo "♥♥♥♥♥♥ $nombre trouvé en $essais essais";
echo "\n<br>\n";
?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>