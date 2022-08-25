<?php
ob_start(); //  ne pas modifier
$titre = "Exo 22 - Formulaire et méthode POST"; // Mettre le titre de la page
?>
<form action="" method="POST">
    <div class="row">
        <div class="input-field col s12">
            <input name="nb" type="text">
            <label for="nb">Nombre</label>
        </div>
    </div>
    <button class="btn waves-effect waves-light" type="submit">Valider
        <i class="material-icons right">send</i>
    </button>
</form>

<!-- mettre votre code ici -->
<?php

if(isset($_POST['nb'])) {
    echo "Le nombre " .$_POST['nb']." est ". ($_POST['nb'] %2 ==0 ? "pair" : "impair");
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