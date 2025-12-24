<?php

class OlympicRepository {
    private array $athletes = [];
    private array $events = [];
    private array $results = [];

    public function addAthlete(Athlete $athlete): void {
        $this->athletes[] = $athlete;
    }

    public function addEvent(Event $event): void {
        $this->events[] = $event;
    }

    public function addResult(Result $result): void {
        $this->results[] = $result;
    }

    public function getEvents(): array {
        return $this->events;
    }

    public function getResultsByEvent(Event $event): array {
        return array_filter(
            $this->results,
            fn(Result $result) => $result->getEvent()->getName() === $event->getName()
        );
    }
}

?>


