<h1>Exercice 2</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots 
contenus dans celle-ci.</p>
<h2>Resultat</h2>
<?php

// Déclaration d'une variable contenant une phrase
$phrase = "Notre formation DL commence aujourd'hui";

// Utilisation de la fonction str_word_count() pour compter le nombre de mots dans la phrase
$nbmots = str_word_count($phrase);

// Affichage d'un message indiquant le nombre de mots dans la phrase
echo "la phrase contient $nbmots mots";

