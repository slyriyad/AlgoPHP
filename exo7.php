<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<?php

$age = 10;

if ($age >= 12) {
    $resultat = "cadet";
} elseif($age >= 10){
    $resultat = "minime";
} elseif($age >= 8){
    $resultat = "pupille";
} elseif($age >= 6){
    $resultat = "poussin";
}
echo "L’enfant qui a $age ans appartient à la catégorie $resultat";
