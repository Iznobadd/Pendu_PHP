<?php

$dico = ["kayak", "rouge", "terre", "ciel", "mer"];

$toFind = $dico[array_rand($dico)];

$proposition = trim(readline("Merci de saisir un mot pour tenter de trouver le mot mystère : "));

// While simple 

while ($proposition !== $toFind) {
    echo $proposition . " nest pas le mot à trouver , veuillez tenter de nouveau " . PHP_EOL;
    $proposition = trim(readline("nouvelle tentative : "));
}

echo "Bravo" . PHP_EOL;

// do...while avec un système de flag ==> $jeuEnCours

$jeuEnCours = true;

do {
    $proposition = trim(readline("Merci de saisir un mot pour tenter de trouver le mot mystère : "));
    if ($proposition === $toFind) {
        echo "Bravo !";
        $jeuEnCours = false;
    } else {
        echo $proposition .  'n\' est pas le mot à trouver vous pouvez tenter de nouveau ';
    }
    echo PHP_EOL;
} while ($jeuEnCours);