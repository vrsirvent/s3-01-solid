<?php

require_once 'IPowerable.php';
require_once 'IWashable.php';

class WashingMachine implements IPowerable, IWashable
{
    public function turnOn(): void {
        echo "Washing machine on\n";
    }

    public function turnOff(): void {
        echo "Washing machine off\n";
    }

    public function wash(): void {
        echo "Washing clothes\n";
    }
}

?>

