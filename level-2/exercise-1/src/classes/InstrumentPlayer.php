<?php

require_once 'Instrument.php';

class InstrumentPlayer
{
    public function playAll(array $instruments): void {
        foreach ($instruments as $instrument) {
            echo  "\n" . $instrument->play() . "\n";
        }
    }
}

?>

