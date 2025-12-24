<?php

require_once 'classes/ElectricHeater.php';
require_once 'classes/WashingMachine.php';

function operateDevice(IPowerable $device): void
{
    $device->turnOn();
    
    if ($device instanceof IHeatable) {
        $device->heat();
    }
    
    if ($device instanceof IWashable) {
        $device->wash();
    }
    
    $device->turnOff();
    echo "\n";
}

function createDevices() {
    return [
        new ElectricHeater(),
        new WashingMachine(),
    ];
}

$devices = createDevices();

foreach ($devices as $device) {
    operateDevice($device);
}
