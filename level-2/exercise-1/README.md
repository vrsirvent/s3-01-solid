# Sprint-3-PHP-and-Patterns
## Tasca S3.01. SOLID
Level 2 - Exercise 1

**Objectives**
Apply SOLID principles by refactoring source code.
In this installment, we propose code refactoring exercises (improving existing code to make it better quality) 
to begin to understand in practice how to apply the SOLID principles.
Therefore, you will start with previously written source code that you will have to analyze, understand, and 
then refactor in accordance with each of the principles.
Refactor the following source code to comply with the O of SOLID.

### Initial code for refactoring
```php
<?php
class InstrumentPlayer
{
    public function play(string $instrument): void
    {
        if ($instrument === 'guitar') {
            echo "🎸 Strumming the guitar\n";
        } elseif ($instrument === 'drums') {
            echo "🥁 Beating the drums\n";
        } elseif ($instrument === 'piano') {
            echo "🎹 Playing the piano\n";
        } else {
            echo "🔇 Unknown instrument\n";
        }
    }
}

$player = new InstrumentPlayer();
$player->play('guitar');
$player->play('drums');
$player->play('piano');
?>
```

/exercise
    ├── scr/                                # Source code 
    |     ├── classes/ 
    |     │     ├── Instrument.php          # Define an interface called Instrument
    |     │     ├── InstrumentPlayer.php    # Define a class called InstrumentPlayer
    |     │     └── InstrumentList.php      # Define a class called InstrumentList that implements the Instrument interface
    |     └── index.php                     # Main script
    └── README.md                           # Exercise documentation 

