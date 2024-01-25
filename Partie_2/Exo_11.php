<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");</p>

<h2>Resultat</h2>

<?php
setlocale(LC_TIME, 'fr_FR');

echo formaterDateFr("2018-02-23");

function formaterDateFr($dateString) {
    $date = new DateTime($dateString); /* Conversion de la chaîne en objet DateTime */ 

    // Créer un formateur de date avec la locale française
    $formateur = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

    // Formater la date en utilisant le formateur
    $result = $formateur->format($date);

    return $result;
}
?>