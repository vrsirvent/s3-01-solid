# Sprint-3-PHP-and-Patterns
## Tasca S3.01. SOLID
Level 3 - Exercise 1

**Objectives**
Apply SOLID principles by refactoring source code.
In this installment, we propose code refactoring exercises (improving existing code to make it better quality) 
to begin to understand in practice how to apply the SOLID principles.
Therefore, you will start with previously written source code that you will have to analyze, understand, 
and then refactor in accordance with each of the principles.
Refactor the following source code to comply with the L in SOLID.

### Initial code for refactoring
```php
<?php
include('classes/Ghost.php');

function doCombat(Character $character)
{
    $character->move();
    $character->attack(); 
}

$enemy = new Ghost();
doCombat($enemy); 

<?php
class Character
{
    public function move(): void
    {
        echo "The character moves forward.\n";
    }

    public function attack(): void
    {
        echo "The character attacks with a sword.\n";
    }
}

<?php
include('Character.php');

class Ghost extends Character
{
    public function move(): void
    {
        echo "The ghost floats silently.\n";
    }

    public function attack(): void
    {
        // Ghosts can't attack in this game
        throw new Exception("Ghosts cannot attack!");
    }
}

?>
```

/exercise
    ├── scr/                        # Source code 
    |     ├── classes/ 
    |     │     ├── Attackable.php  # Define an interface called Attackable
    |     │     ├── Character.php   # Define a class called Character that implements two interfaces: Movable and Attackable
    |     │     ├── Ghost.php       # Define a class called Ghost that implements the Movable interface
    |     │     └── Movable.php     # Define an interface called Movable
    |     └── index.php             # Main script
    └── README.md                   # Exercise documentation 


