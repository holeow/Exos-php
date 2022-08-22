<?php
ob_start(); //  ne pas modifier
$titre = "Exo 19 - Les tableaux"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$tableau = ["Clément"=> ["nom"=>"Clément","age"=>25,"sexe"=> "homme"],"Mathilde"=> ["nom"=>"Mathilde","age"=>19,"sexe"=> "femme"]];

function explain($t){
    foreach($t as $personne){
        foreach($personne as $key => $val)
        {
            echo "$key: $val <br>";
        }
        echo "===============</br>";
    }
}

explain($tableau);
?>


<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>