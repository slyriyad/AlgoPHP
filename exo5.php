<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<?php

$francs = 100;
$coefFrancs = 6.55957;
$euro = $francs * $coefFrancs;
echo "Montant en francs : $francs <br>" ;
echo "100 francs =  .  $euro €";