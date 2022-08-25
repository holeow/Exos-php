<?php
ob_start(); //  ne pas modifier
$titre = "Exo 29 - Attribut static"; // Mettre le titre de la page
require "./Maison.php";
?>

<!-- mettre votre code ici -->
<?php

$maisons = [
new Maison(1982,4,98),
new Maison(2005,3,110),
new Maison(1998,2,78),
new Maison(2017,6,135)
];

echo "<table><thead><tr>
<th>#</th>
<th>Date</th>
<th>Nb chambres</th>
<th>Surface</th>
</tr></thead><tbody>";

foreach ($maisons as $maison) {
echo $maison->toTR();
}

echo "</tbody></table>"
?>


<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>