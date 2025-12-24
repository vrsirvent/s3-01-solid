<?php

require_once 'IPowerable.php';
require_once 'IHeatable.php';

class ElectricHeater implements IPowerable, IHeatable
{
    public function turnOn(): void {
        echo "\n" . "Heater on\n";
    }

    public function turnOff(): void {
        echo "Heater off\n";
    }

    public function heat(): void {
        echo "Heating the room\n";
    }
}

?>

