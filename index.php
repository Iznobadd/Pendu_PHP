<?php

$dico = ["kayak", "rouge", "terre", "ciel", "mer"];

$toFind = $dico[array_rand($dico)];

$proposition = trim(readline("Merci de saisir un mot pour tenter de trouver le mot mystère : "));

$life = 5;

$etat = "";

for($i = 0; $i < strlen($toFind); $i++)
{
    var_dump($toFind[$i]);
    $etat .= '_';
}

while ($proposition !== $toFind) {
    $life--;
    if($life == 0 )
    {
        echo "Vous avez épuisé toutes vos vies, vous avez perdu!";
        exit;
    }
    else
    {
        // SAISIE D'UNE LETTRE
        if(strlen($proposition) == 1)
        {

            for ($i = 0; $i < strlen($toFind); $i++) {
                if ($toFind[$i] === $proposition) {
                    $etat[$i] = $proposition;

                    if($etat == $toFind)
                    {
                        echo "Bravo vous avez trouvé le mot !";
                        exit;
                    }
                }
            }

            echo $etat . PHP_EOL;
            echo ' La lettre ' . $proposition . " n'est pas dans le mot. Il vous reste " . $life . "vies, veuillez tenter de nouveau " . PHP_EOL;

            $proposition = trim(readline("nouvelle tentative : "));

        }

        else
            {
                echo ' ' . $proposition . " nest pas le mot à trouver, il vous reste " . $life . "vies, veuillez tenter de nouveau " . PHP_EOL;

                $proposition = trim(readline("nouvelle tentative : "));
            }
        }

}

echo "Bravo" . PHP_EOL;


?>