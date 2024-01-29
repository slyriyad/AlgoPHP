<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
    caractère passée en argument en majuscules et en rouge.
    Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
</p>

<h2>Resultat</h2>

<style>
    .red {
        color: red;
    }
</style>

<?php

$texte = "mon texte en paramètre";

function convertirMajRouge($texte)
{
    $result = mb_strtoupper($texte);
    $result = "<p class='red'>$result</p>";
    return $result;
}

echo convertirMajRouge($texte);
