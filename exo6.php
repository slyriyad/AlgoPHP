<h1>Exercice 5</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<?php

$prixUnit = 9.99;
$quantité = 5;
$TVA1 = 0.2;
$tva = 1.2;
$montant = ($prixUnit * $quantité)*$tva;

echo "Prix unitaire de l’article : $prixUnit € <br>;
Quantité : $quantité <br>;
Taux de TVA : $TVA1<br>;
Le montant de la facture à régler est de : $montant €";
