<?php
ob_start(); //  ne pas modifier
$titre = "Exo 15 - Les tableaux"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$voyelles = ["a","e","i","o","u","y","A","E","I","O","U","Y"];
$mot = "bordure";
$result1 = str_replace($voyelles,"", $mot);

$str = "";
foreach(str_split($mot) as $letter){
    if(!in_array($letter,$voyelles))
    $str.= $letter;
}
echo $result1;
echo "<br>";
echo $str;
?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>