<?php ob_start(); //  ne pas modifier
$titre = "Exo 10 - La boucle do while"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$essais = 0;
do{
    $r1 = rand(1,1000);
    $r2 = rand(1,1000);
    $r3 = rand(1,1000);

    $essais++;

    echo "$r1, $r2, $r3";
    echo "\n<br>\n";

}
while(!(($r1%2==0) && ($r2%2==1) && ($r3%2==1)));

echo "Resultat obtenu en $essais coups";


?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>