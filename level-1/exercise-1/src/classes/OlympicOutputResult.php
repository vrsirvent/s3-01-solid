<?php

class OlympicOutputResult {
    public function outputResults(OlympicRepository $repository): void {
        echo "Olympic Games results:\n\n";
        
        foreach ($repository->getEvents() as $event) {
            echo "Event: " . $event->getName() . " on " . $event->getDate() . "\n";
            
            foreach ($repository->getResultsByEvent($event) as $result) {
                echo "- " . $result->getAthlete()->getName() 
                     . " from " . $result->getAthlete()->getCountry() 
                     . " won " . $result->getMedal() . "\n";
            }
            
            echo "\n";
        }
    }
}

?>

