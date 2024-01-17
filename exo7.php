<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<?php

$age = 5;

if($age <= 6 || $age >= 12){
    $resultat = "aucune catégorie";
}
if ($age >= 12) {
    $resultat = "la catégorie cadet";
} elseif($age >= 10){
    $resultat = "la catégorie minime";
} elseif($age >= 8){
    $resultat = "la catégorie pupille";
} elseif($age >= 6){
    $resultat = "la catégorie poussin";
}
echo "L’enfant qui a $age ans appartient à $resultat";
