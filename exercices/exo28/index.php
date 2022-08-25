<?php
ob_start(); //  ne pas modifier
$titre = "Exo 28 - Private et Getters"; // Mettre le titre de la page
require './Voiture.php';
?>

<form action="" method="POST">
    <div class="row">
        <div class="input-field col s12">
            <input name="marque" type="text">
            <label for="marque">Marque</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input name="annee" type="text">
            <label for="annee">Année</label>
        </div>
    </div>
    <button class="btn waves-effect waves-light" type="submit">Valider
        <i class="material-icons right">send</i>
    </button>

    </button>
    <a href="index.php" class="waves-effect waves-light btn red accent-2">Reset</a>
</form>

<div class="divider"></div>


<!-- mettre votre code ici -->
<?php
$table = [
    new Voiture('Astra', 'Opel', 'Rouge', 2017),
    new Voiture('Twingo', 'Renault', 'Vert', 2019),
    new Voiture('308', 'Peugeot', 'Bleu', 2020),
    new Voiture('Tigra', 'Opel', 'Noir', 2021),
    new Voiture('Mégane', 'Renault', 'Rouge', 2019)
];

$marque = null;
$annee = null;

if (isset($_POST['marque']) && !empty(['marque'])) {
    $marque = $_POST['marque'];
}
if (isset($_POST['annee']) && !empty(['annee'])) {
    $annee = $_POST['annee'];
}

foreach ($table as $value) {
    if (($value->getMarque() == $marque || $marque == null) && ($value->getAnnee() == $annee || $annee == null)) {
        echo $value->tostring();
        echo "<br>============<br>";
    }
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