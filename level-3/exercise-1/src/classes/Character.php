<?php

require_once 'Movable.php';
require_once 'Attackable.php';

class Character implements Movable, Attackable
{
    public function move(): void
    {
        echo "The character moves forward.\n";
    }

    public function attack(): void
    {
        echo "The character attacks with a sword.\n";
    }
}

?>

