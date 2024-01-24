<h1>Exercice 2</h1>

<p>Soit le tableau suivant :
$capitales = array
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
</p>

<h2>Resultat</h2>


<?php

$capitales = [
    "Allemagne" => "Berlin",
    "France" => "Paris",
    "Italie" => "Rome",
    "Usa" => "Washington"
];

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales){
    ksort($capitales);
    $result = "<table border=1>
                <thread>
                    <tr>
                        <th>Pays</th>
                        <th>Capitale</th>
                    </tr>
                </thread>
            <tbody>";
    foreach($capitales as $pays => $capitales) {
        $result .= "<tr><td>".strtoupper($pays)."</td>
        <td>".ucfirst($capitales)."</td></tr>"; 
    }

    $result .= "</tbody></table>";
    return $result;
}
