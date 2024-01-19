<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme </p>
<h2>Resultat</h2>
<?php

// proposition 1 :

$nmbr = 8;
echo "table de $nmbr :<br>";
for($i = 1; $i <= 10; $i++) {
    echo $i." "."x $nmbr = ".$nmbr*$i."<br>";
}

// proposition 2 :

$nmbr = 8;
echo "table de $nmbr :<br>";
$j = 1;
while($j <= 10) {
    echo $j." "."x $nmbr = ".$nmbr*$j."<br>";
    $j++;
}