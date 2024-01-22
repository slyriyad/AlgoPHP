<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
d’afficher le nombre de marques de voitures présentes dans le tableau.</p>
<h2>Resultat</h2>
<?php

$marques = ["Peugeot","Renault","BMW","Mercedes"];
$taillemarques = count($marques);
echo "Il y a $taillemarques marques de voitures dans le tableau :"."<br>";

for($i = 0; $i <= $taillemarques - 1 ; $i++) {
    echo "<ul><li>"."$marques[$i]"."</li></ul>";
}