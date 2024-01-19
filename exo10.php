
<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.</p>
<h2>Resultat</h2>
<?php

$montantàpayer = 152;
$montantversé = 200;
$reste = $montantversé - $montantàpayer;

$nmbr10 = floor( $reste /10);
$result = $reste - ($nmbr10 * 10);

$nmbr5 = floor( $result /5);
$result = $result - ($nmbr5 * 5);

$nmbr2 = floor( $result /2);
$result = $result - ($nmbr2 * 2);

$nmbr1 = floor( $result /1);
$result = $result - ($nmbr1 * 1);

echo "Montant à payer : $montantàpayer €<br>
Montant versé : $montantversé €<br>
Reste à payer : $reste €<br>
***************************************************<br>
Rendue de monnaie : <br>
$nmbr10 billets de 10 € - $nmbr5 billet de 5 € - $nmbr2 pièce de 2 € - $nmbr1 pièce de 1 €";