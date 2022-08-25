<?php
ob_start(); //  ne pas modifier
$titre = "Exo 24 - Tableau à 2 dimensions"; // Mettre le titre de la page
?>


<!-- mettre votre code ici -->
<?php
$table = [];

for ($i=1; $i < 11; $i++) { 
    $t = [];
    for ($j=1; $j < 11; $j++) { 
        array_push($t,$i*$j);
    }
    array_push($table,$t);
}


?>
<table class="stripped">
<?php
foreach($table as $row) {
    echo "<tr class=\"fw-bold\">";

    foreach($row as $col) {
        echo"<td>$col</td>";
    }

    echo "</tr>";
}
?>
</table>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>