<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>
<h2>Resultat</h2>
<?php

$age = 15;
$sexe = "femme";


if(($sexe == "homme" && $age <= 20 )|| ($sexe == "femme" && $age <18  || $age >35 )){
    $resultat = "Non imposable";
    } else {
    $resultat = "Age : $age
    Sexe : $sexe
    La personne est imposable.
    ";  
    } echo "Age : $age<br>
    Sexe : $sexe <br>
    $resultat" ;
