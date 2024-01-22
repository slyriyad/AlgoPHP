  <h1>Exerice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)</p>
<h2>Resultat</h2>
<?php

$tabrenomsLangues = [
  'Mickaël' => 'FRA',
  'Virgile' => 'ESP',
  'Marie-Claire' => 'ENG'
];

foreach ($tabPrenomsLangues as $personne => $langue) {
  $salutation = match ($langue) {
      'FRA' => 'Salut',
      'ENG' => 'Hello',
      'ESP' => 'Hola',
  };

  echo "$salutation $personne\n<br>";
}
      
// -----------explication match---------------
// ''Match'' prend la valeur de ''$langue'' et la compare successivement avec les différentes valeurs spécifiées après
//  les flèches (=>).

// Si une correspondance est trouvée, le bloc de code correspondant à la première correspondance est exécuté, 
// et la valeur de la correspondance devient la valeur de la variable ''$salutation''.

// Si aucune correspondance n'est trouvée, le bloc de code associé à default est exécuté.

// Dans mon cas, ''match ($langue)'' est utilisé pour déterminer la salutation appropriée en fonction de la langue
//  de la personne dans le tableau ''$tableauPrenomsLangues''. C'est une alternative plus concise et lisible à la
// construction ''switch'' traditionnelle.
