<?php
ob_start(); //  ne pas modifier
$titre = "Exo 20 - Les tableaux et fonctions"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$personnes = [
    // pour le genre : true = homme
    [
        "nom" => "Clément",
        "age" => 25,
        "sexe" => true,
        "notes" => [12,15,11,9,18]
    ],
    [
        "nom" => "Mathilde",
        "age" => 19,
        "sexe" => false,
        "notes" => [11,14,10,4,20,8,2]
    ],
    [
        "nom" => "Oscar",
        "age" => 15,
        "sexe" => true,
        "notes" => [12,15,6,15,20,11,9]
    ],
    [
        "nom" => "Piège",
        "age" => 22,
        "sexe" => true,
        "notes" => 12
    ]
];

function Sexe($bool){
    return $bool ? "sexe : homme<br>" : "sexe : femme<br>";
}

function Notes($value){
    if(gettype($value) == "integer"){
        return "Note :$value<br>";
    }
    else{
        $str = "";
        for ($i=1; $i <= count($value); $i++) 
        { 
            $str.= "Note $i: ". $value[$i-1]."<br>";
        }
        return $str;
    }
}

function explain(array $arr){
    $str = "";

    foreach ($arr as $key => $value) {
        if($key == "notes"){

            $str.= Notes($value);

        }
        elseif($key == "sexe"){
           $str.=Sexe($value);
        }
        else{

            $str.= "$key : $value<br>";

        }
    }
    return $str;
}



foreach($personnes as $ppl){
    echo explain($ppl);
    echo "============<br>";
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