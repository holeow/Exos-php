<?php ob_start(); //  ne pas modifier
$titre = "Exo 4 - Les Tests (2)"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
    $rng = rand(1,20);
    echo "Le nombre random est $rng";
    echo "\n<br>\n";
    if($rng <=5){
        echo 'Entre 1 et 5';
    }
    elseif($rng <=10){
        echo 'entre 6 et 10';
    }
    elseif($rng <=15){
        echo 'entre 11 et 15';
    }
    else{
        echo 'Au dessus de 15';
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