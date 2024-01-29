<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
    dans le tableau associatif si la case est cochée ou non.
    Exemple :
    genererCheckbox($elements);</p>

<h2>Resultat</h2>

<?php

$elements = [
    "choix 1" => "",
    "choix 2" => "",
    "choix 3" => "checked"
];
echo genererCheckbox($elements);

function genererCheckbox($elements)
{
    $result = "";

    foreach ($elements as $key => $checked) {
        $result .=
            "<input type='checkbox' id='$key' name='$key.' value='$key' $checked/>
    <label for='$key'>$key</label>";
    }
    return $result;
}
