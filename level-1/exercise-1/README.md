# Sprint-3-PHP-and-Patterns
## Tasca S3.01. SOLID
Level 1 - Exercise 1

**Objectives**
Apply the SOLID principles by refactoring source code.
Therefore, you will start with previously written source code that you will have to analyze, understand, and then refactor 
in accordance with each of the principles.

Refactor the following source code to comply with the S in SOLID.

### Initial code for refactoring
```php
<?php
class OlympicGames {
    private $athletes = [];
    private $events = [];
    private $results = [];

    public function processOlympicData($athletesData, $eventsData, $resultsData) {

        foreach ($athletesData as $athlete) {
            $this->athletes[] = ['name' => $athlete['name'], 'country' => $athlete['country']];
        }

        foreach ($eventsData as $event) {
            $this->events[] = ['event' => $event['event'], 'date' => $event['date']];
        }

        foreach ($resultsData as $result) {
            $this->results[] = [
                'athlete' => $result['athlete'],
                'event' => $result['event'],
                'medal' => $result['medal']
            ];
        }

        echo "Olympic Games Results:\n";
        foreach ($this->events as $event) {
            echo "Event: " . $event['event'] . " on " . $event['date'] . "\n";
            foreach ($this->results as $result) {
                if ($result['event'] === $event['event']) {
                    echo "- " . $result['athlete'] . " from " . $result['country'] . " won " . $result['medal'] . "\n";
                }
            }
        }
    }
}

$olympics = new OlympicGames();

$athletesData = [
    ['name' => 'Usain Bolt', 'country' => 'Jamaica'],
    ['name' => 'Michael Phelps', 'country' => 'USA']
];

$eventsData = [
    ['event' => '100m Sprint', 'date' => '2024-08-01'],
    ['event' => 'Swimming', 'date' => '2024-08-02']
];

$resultsData = [
    ['athlete' => 'Usain Bolt', 'event' => '100m Sprint', 'medal' => 'Gold'],
    ['athlete' => 'Michael Phelps', 'event' => 'Swimming', 'medal' => 'Gold']
];

$olympics->processOlympicData($athletesData, $eventsData, $resultsData);

?>
```

/exercise
    ├── scr/                                    # Source code 
    |     ├── classes/ 
    |     │     ├── Athlete.php                 # Athlete class, which allows you to create instances of athletes and obtain their data with methods.
    |     │     ├── Event.php                   # Event class, which represents an event with properties.
    |     │     ├── Result.php                  # Result Class, representing an athlete's result in a given event.
    |     │     ├── OlympicOutputResult.php     # OlympicOutputResult class, displays the results of the Olympic Games.
    |     │     └── OlympicRepository.php       # OlympicRepository class, repository for managing athletes, events, and results.
    |     └── index.php                         # Main script
    └── README.md                               # Exercise documentation 

