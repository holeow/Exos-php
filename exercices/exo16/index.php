<?php
ob_start(); //  ne pas modifier
$titre = "Exo 16 - Les tableaux"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$m = ["Marc","Luc","Clément","Vincent"];
$f = ["Mathilde","Lucie","Véronique"];

for ($i=0; $i < count($m); $i++) { 
    echo "$i: ". $m[$i] . "<br>";
}
echo "****************<br>";

$cnt = 0;
foreach($f as $fille){
    echo "$cnt: ". $fille . "<br>";
    $cnt++;
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