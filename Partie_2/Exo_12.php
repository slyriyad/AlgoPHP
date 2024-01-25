<h1>Exercice 11</h1>

<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.
Soit le tableau suivant :
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</p>

<h2>Resultat</h2>

<?php

$tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]];


foreach ($tableauValeurs as $variable){
    var_dump($variable); // Afficher les informations détaillées de la variable à l'aide de var_dump
    echo "<br>";
}