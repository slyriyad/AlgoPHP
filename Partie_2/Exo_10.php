<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit).</p>

<h2>Resultat</h2>

<?php

$nomsInput = ["Nom", "Prénom", "e-mail", "ville", "sexe"];

echo afficherInput($nomsInput);

function afficherInput($nomsInput)
{
    $result = "<form>
    <ul>";
    foreach ($nomsInput as $key => $info) {
        $result .= 
        "<li>
            <label for='$info'>$info&nbsp;:</label>
            <input type='text' id='$info' name='$info' />
        </li>";
    }

    $result .= "</ul>";
    return $result;
}

$elements = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];
echo alimenterListeDeroulante($elements);

function alimenterListeDeroulante($elements)
{
    $result = "<p>
        <label for='usercivilité'>
            <span>Civilité&nbsp;:</span>
        </label>
        <select id='civilité' name='usercivilité'>";
    foreach ($elements as $key => $civilité) {
        $result .= "<option value='$civilité'>$civilité</option>";
    }

    $result .= "</select>
    </p><br>";
    return $result;
}

echo '<input class="button" type="button" value="Add to favorites" /></form>';
