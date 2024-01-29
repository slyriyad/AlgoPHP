<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
  précisant le nom des champs associés.
  Exemple :
  $nomsInput = array("Nom","Prénom","Ville");
  afficherInput($nomsInput);</p>

<h2>Resultat</h2>

<?php

$nomsInput = ["Nom", "Prénom", "Ville"];

echo afficherInput($nomsInput);

function afficherInput($nomsInput)
{

  $result = "<form>
    <ul>";
  foreach ($nomsInput as $info) {

    $result .=

      "<li>
        <label for='$info'>$info&nbsp;:</label>
        <input type='text' id='$info' name='$info' />
      </li>
    ";
  }

  echo "</ul></form>";
  return $result;
}
