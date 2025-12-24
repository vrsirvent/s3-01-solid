<?php

require_once 'classes/Instrument.php';
require_once 'classes/Instruments.php';
require_once 'classes/InstrumentPlayer.php';

$instruments = [
    new Instruments('guitar', '🎸', 'Strumming'),
    new Instruments('drums', '🥁', 'Beating'),
    new Instruments('piano', '🎹', 'Playing'),
];

$player = new InstrumentPlayer();
$player->playAll($instruments);

?>

