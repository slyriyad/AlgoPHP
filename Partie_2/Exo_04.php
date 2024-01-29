<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
    le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
    nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
    On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
    https://fr.wikipedia.org/wiki/
    Le tableau passé en argument sera le suivant :
    $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
    "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");

</p>

<h2>Resultat</h2>

<?php

$capitales = [
    "Allemagne" => "Berlin",
    "France" => "Paris",
    "Italie" => "Rome",
    "Usa" => "Washington",
    "Espagne" => "Madrid"
];

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales)
{
    ksort($capitales);
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitale</th>
                        <th>Lien</th>
                    </tr>
                </thead>
            <tbody>";
    foreach ($capitales as $pays => $capitale) {
        $result .= "<tr>
                        <td>" . strtoupper($pays) . "</td>
                        <td>" . ucfirst($capitale) . "</td>
                        <td><a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'>Lien <a/></td>
                    </tr>";
    }



    $result .= "</tbody></table>";
    return $result;
}
