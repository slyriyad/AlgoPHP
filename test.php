<?php

$statut=0;
$modele = "gzget";
$marque = "fff";


if($statut == 0) {
    $resultat = $statut = 1;
    $resultat = " démarre";
} else {
    $resultat = " est déjà démarré";
}
echo "Le véhicule $marque $modele $resultat" ;