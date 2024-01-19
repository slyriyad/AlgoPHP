<h1>Exerice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Resultat</h2>

<?php

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$sommenotes = array_sum($notes);
$nbNotes = count($notes);
$moyenne = round($sommenotes / $nbNotes, 2);

echo "Les notes obtenues par l’élève sont :".implode(", ", $notes)."<br>";
echo "Sa moyenne générale est donc de : $moyenne";
