<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
    valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
    Exemple :
    afficherRadio($nomsRadio);</p>

<h2>Resultat</h2>

<?php

$nomsRadio = ["Monsieur", "Madame", "Mademoiselle"];
echo afficherRadio($nomsRadio);
function afficherRadio($nomsRadio)
{
    $result = "";
    foreach ($nomsRadio as $civilité) {
        $result .=
            "<input type='radio' id='$civilité' name='civilite' />
    <label for='$civilité'>$civilité</label><br>";
    }
    return $result;
}
