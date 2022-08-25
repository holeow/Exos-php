<?php
ob_start(); //  ne pas modifier
$titre = "Exo 26 - Tableaux associatifs"; // Mettre le titre de la page
?>
<div class="row">
<a href="?type=tous" class="waves-effect waves-light btn">Tous</a>
<a href="?type=chien" class="waves-effect waves-light btn">Chiens</a>
<a href="index.php?type=chat" class="waves-effect waves-light btn">Chats</a>
<a href="index.php" class="waves-effect waves-light btn red accent-2">Reset</a>
</div>
<div class="divider"></div>


<!-- mettre votre code ici -->
<?php
$table = [
    ['nom' => "Rantanplan", "age" => 10, "type" => "chien"],
    ['nom' => "Garfield", "age" => 2, "type" => "chat"],
    ['nom' => "Mabrouk", "age" => 12, "type" => "chien"],
    ['nom' => "Miaou", "age" => 5, "type" => "chat"],
];

if(isset($_GET["type"])){
    $type = $_GET["type"];
    if($type == "tous"){
        foreach($table as $val){
            displayArray($val);
        }
    }
    elseif($type == "chien"){
        foreach($table as $val){
            if($val["type"] == "chien"){
                displayArray($val);
            }
            
        }
    }
    elseif($type == "chat"){
        foreach($table as $val){
            if($val["type"] == "chat"){
                displayArray($val);
            }
            
        }
    }
}

function displayArray($val){
    echo "<pre>";
    var_dump($val);
    echo "</pre>";
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