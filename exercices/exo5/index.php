<?php ob_start(); //  ne pas modifier
$titre = "Exo 5 - Les Tests (3)"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
    $rnga = rand(1,100);
    $rngb = rand(1,100);
    
    echo "Nombre A : $rnga";
    echo   "\n<br>\n";
    echo "Nombre B : $rngb";
    echo "\n<br>\n";
    
    $val = abs($rnga - $rngb);

    echo "Valeur absolue de $rnga - $rngb = $val";
    echo "\n<br>\n";
    if($val >25 && $val <75){
        echo 'La valeur est entre 25 et 75';
    }
    else{
        echo 'La valeur n\'est pas entre 25 et 75';
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