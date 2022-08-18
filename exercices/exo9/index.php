<?php ob_start(); //  ne pas modifier
$titre = "Exo 9 - La boucle while (remplacée par do-while)"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
do{
    $rand = rand(1,20);
    $essais = 1;
    if($rand <15){
        echo "Essai $essais : $rand est trop petit (<15)";
        echo "\n<br>\n";
    }
    $essais++;
}
while($rand <15);
echo "Le nombre choisi est : $rand";



?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>