<?php

class Result {
    private Athlete $athlete;
    private Event $event;
    private string $medal;

    public function __construct(Athlete $athlete, Event $event, string $medal) {
        $this->athlete = $athlete;
        $this->event = $event;
        $this->medal = $medal;
    }

    public function getAthlete(): Athlete {
        return $this->athlete;
    }

    public function getEvent(): Event {
        return $this->event;
    }

    public function getMedal(): string {
        return $this->medal;
    }
}

?>

