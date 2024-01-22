<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h1>resultat<h1> 
<h2>Resultat</h2>
<?php

$phrase = "radars"; 
$phraseinv = str_replace(' ', '', $phrase);
$phraseinv = strtolower($phraseinv);
$phraseinv = strrev($phraseinv);

if($phraseinv == $phrase) {
    $resultat = "La phrase « $phrase » est palindrome";
} else {
    $resultat = "La phrase « $phrase » n'est pas palindrome";
}
echo $resultat;
