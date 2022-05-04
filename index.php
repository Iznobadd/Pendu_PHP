<?php

$dico = ["kayak", "rouge", "terre", "ciel", "mer"];

$toFind = $dico[array_rand($dico)];

$proposition = trim(readline("Merci de saisir un mot pour tenter de trouver le mot mystère : "));

$life = 5;

// While simple 

while ($proposition !== $toFind) {
    $life--;

    if($life == 0 )
    {
        echo "Vous avez épuisé toutes vos vies, vous avez perdu!";
        exit;
    }
    else
    {
        echo $proposition . " nest pas le mot à trouver, il vous reste " . $life . "vies, veuillez tenter de nouveau " . PHP_EOL;

        $proposition = trim(readline("nouvelle tentative : "));
    }

}

echo "Bravo" . PHP_EOL;
