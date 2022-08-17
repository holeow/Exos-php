<?php ob_start(); //  ne pas modifier
$titre = "Exercices PHP"; // Mettre le titre de la page
?>

<!-- mettre le code ici -->
<div class="row">

    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo1 - Variables</span>
                <p>Déclaration de variables et permutation de leurs valeurs.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo1" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo2 - Variables et concaténation</span>
                <p>Vous devrez réaliser des affichages en utilisant différents types de concaténation</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo2" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo3 -  Les tests (1)</span>
                <p>Écrire une expression conditionnelle utilisant les variables $age et $sexe dans une instruction if pour sélectionner une personne de sexe féminin dont l’age est compris entre 21 et 40 ans et afficher un message de bienvenue approprié.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo3" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo4 - Les tests (2)</span>
                <p>Le programme choisi un nombre aléatoire entre 1 et 20. En fonction de ce nombre il faudra construire une structure conditionnelle.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo4" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo5 - Les tests (3)</span>
                <p>Le programme choisi deux nombres aléatoires entre 1 et 100. Calcule la valeur absolue du premier moins le second et détermine si le résultat est compris entre 25 et 75.</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo5" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>

    <div class="col s12 m6 l4">
        <div class="card medium teal darken-2">
            <div class="card-content white-text">
                <span class="card-title center-align">Exo6 - Les ternaires (3)</span>
                <p>Reprendre l'exo2 mais en utilisant les ternaires</p>
            </div>
            <div class="card-action">
                <a href="exercices/exo6" class="valign-wrapper">exercice <i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
    </div>





</div>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "./partials/layout.php";
?>