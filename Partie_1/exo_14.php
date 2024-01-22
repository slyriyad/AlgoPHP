<h1>Exerice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Resultat</h2>

<?php

$datebirth = new DateTime('2001-02-21');
$now = new DateTime("now");
$interval = date_diff($datebirth, $now);

echo "Age de la personne : ".$interval->format('%y ans %m mois %d jours ');
