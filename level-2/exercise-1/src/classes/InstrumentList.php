<?php

require_once 'Instrument.php';

class InstrumentList implements Instrument
{
    private string $name;
    private string $emoji;
    private string $action;

    public function __construct(string $name, string $emoji, string $action) {
        $this->name = $name;
        $this->emoji = $emoji;
        $this->action = $action;
    }

    public function play(): string {
        return "{$this->emoji}  {$this->action} the {$this->name}";
    }
}

?>

