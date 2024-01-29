<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
  de valeurs.
  Exemple :
  $elements = array("Monsieur","Madame","Mademoiselle");
  alimenterListeDeroulante($elements);</p>

<h2>Resultat</h2>

<?php

$elements = ["Monsieur", "Madame", "Mademoiselle"];
echo alimenterListeDeroulante($elements);
function alimenterListeDeroulante($elements)
{


  $result = "<p>
    <label for='civilité'>
      <span>Civilté&nbsp;:</span>
      </label>
    <select id='civilité' name='usercivilité'>
    ";
  foreach ($elements as $civilités) {

    $result .=
      "<option value='$civilités'>$civilités</option>";
  }

  echo "</select>
    </p>";
  return $result;
}
