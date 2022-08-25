<?php
ob_start(); //  ne pas modifier
$titre = "Exo 25 - Fonctions dans un fichier externe"; // Mettre le titre de la page
?>


<!-- mettre votre code ici -->
<?php
require "./funcs.php";

$table1 = [2,6,10,20,9,14];
$table2 = [4,8,2,26,18,14];
?>

<div class="row">
<div class="col s12 m6">
        <h2>Tableau 1</h2>
        <?php afficherTableau($table1) ?>
        <br>
        La moyenne est de : <?= calculerMoyenne($table1) ?>
        <br>
        <?php
        if(estTableauPair($table1)){
            echo "Le tableau de contient que des valeurs paires.";
        }else echo "Le tableau ne contient pas que des valeurs paires.";
        ?>
    </div>
    <div class="col s12 m6">
        <h2>Tableau 2</h2>
        <?php afficherTableau($table2) ?>
        <br>
        La moyenne est de : <?= calculerMoyenne($table2) ?>
        <br>
        <?php
        if(estTableauPair($table2)){
            echo "Le tableau de contient que des valeurs paires.";
        }else echo "Le tableau ne contient pas que des valeurs paires.";
        ?>
    </div>

</div>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>