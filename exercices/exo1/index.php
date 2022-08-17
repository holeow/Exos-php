<?php ob_start(); //  ne pas modifier
$titre = "Exo 1 - variables"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
    $a = 3;
    $b = 5;
    $c = 7;
    
    echo'********** Avant permutation ********** <br>' . 'A:' . $a . '<br>' . 'B:' . $b . '<br>' . 'C:' . $c . '<br>';

    $permut = $a;
    $a = $b;
    $b = $c;
    $c = $permut;
    echo'********** Après permutation ********** <br>' . 'A:' . $a . '<br>' . 'B:' . $b . '<br>' . 'C:' . $c ;
    
?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>