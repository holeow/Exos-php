<?php
ob_start(); //  ne pas modifier
$titre = "Exo 23 - Formulaire et tableau"; // Mettre le titre de la page
?>
<form action="" method="POST">
    <div class="row">
        <div class="input-field col s12">
            <input name="note1" type="text">
            <label for="note1">Note 1</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input name="note2" type="text">
            <label for="note2">Note 2</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input name="note3" type="text">
            <label for="note3">Note 3</label>
        </div>
    </div>
    <button class="btn waves-effect waves-light" type="submit">Valider
        <i class="material-icons right">send</i>
    </button>
</form>

<!-- mettre votre code ici -->
<?php

$tableau = [];

if(isset($_POST['note1']) && isset($_POST['note2']) && isset($_POST['note3'])){
    $tableau = [$_POST['note1'],$_POST['note2'],$_POST['note3']];
    $moyenne = array_sum($tableau) / count($tableau);
    echo "La moyenne est de $moyenne";
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