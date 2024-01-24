<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.
Exemple :
$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);</p>

<h2>Resultat</h2>

<?php

$nomsInput = ["Nom","Prénom","Ville"];

echo afficherInput($nomsInput);

function afficherInput($nomsInput) {

    $result="<form >
    <ul>";
    foreach ($nomsInput as $key=>$info){
    
    $result .= 
    
      "<li>
        <label for='name'>$nomsInput[$key]&nbsp;:</label>
        <input type='text' id='$nomsInput[$key]' name='' />
      </li>
    ";
    }

    echo "</ul></form>";
    return $result;
    
}

