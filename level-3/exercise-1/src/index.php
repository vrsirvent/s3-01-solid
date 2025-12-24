<?php

require_once 'classes/Character.php';
require_once 'classes/Ghost.php';

function doMovement(Movable $spectrum): void
{
    $spectrum->move();
}

function doCombat(Attackable $attacker): void
{
    $attacker->attack();
}

$spectrums = [new Ghost(), new Character()];

echo "\nMovements: \n";
foreach ($spectrums as $spectrum) {
    doMovement($spectrum);
}

echo "\nAttacks: \n";
foreach ($spectrums as $spectrum) {
    if ($spectrum instanceof Attackable) {
        doCombat($spectrum);
    } else {
        echo get_class($spectrum) . " cannot attack.\n";
    }
}

?>

