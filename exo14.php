<h1>Exerice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Resultat</h2>

<?php

$jnaiss = 15;
$mnaiss = 9;
$anaiss = 1990;

$jour = date('d');
$mois = date('m');
$année = date('y');

$j_age = $jour - $jnaiss ;
$m_age = $mois - $mnaiss;
$a_age = $année - $anaiss; 

echo "Age de la personne :$j_age ans $m_age ans $a_age ans";
