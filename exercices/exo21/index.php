<?php
ob_start(); //  ne pas modifier
$titre = "Exo 21 - Formulaire et méthode GET"; // Mettre le titre de la page
?>
<form action="" method="GET">
    <div class="row">
        <div class="input-field col s12">
            <input name="pseudo" type="text">
            <label for="pseudo">Pseudo</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input name="age" type="text">
            <label for="age">Age</label>
        </div>
    </div>
    <button class="btn waves-effect waves-light" type="submit">Valider
        <i class="material-icons right">send</i>
    </button>
</form>

<!-- mettre votre code ici -->
<?php

if(isset($_GET['pseudo']) && isset($_GET['age'])){
    echo $_GET['pseudo']." a ".$_GET['age']." ans";
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