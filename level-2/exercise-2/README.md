# Sprint-3-PHP-and-Patterns
## Tasca S3.01. SOLID
Level 2 - Exercise 2

**Objectives**
Apply the SOLID principles by refactoring source code.
In this installment, we propose code refactoring exercises (improving existing code to make it better quality) 
to begin to understand in practice how to apply the SOLID principles.
Therefore, you will start with previously written source code that you will have to analyze, understand, 
and then refactor in accordance with each of the principles.
Refactor the following source code to comply with the I of SOLID.

### Initial code for refactoring
```php
<?php
require_once 'classes/ElectricHeater.php';
require_once 'classes/WashingMachine.php';

$heater = new ElectricHeater();
$washer = new WashingMachine();

$heater->turnOn();
$heater->heat();
$heater->turnOff();
$heater->wash();

echo "\n";

$washer->turnOn();
$washer->heat();
$washer->wash();
$washer->turnOff();

<?php
require_once 'IMachineActions.php';

class ElectricHeater implements IMachineActions
{
    public function turnOn(): void
    {
        echo "Heater on\n";
    }

    public function turnOff(): void
    {
        echo "Heater off\n";
    }

    public function heat(): void
    {
        echo "Heating the room\n";
    }

    public function cool(): void
    {
        // Not supported
        throw new Exception("Cooling not supported");
    }

    public function wash(): void
    {
        // Not supported
        throw new Exception("Washing not supported");
    }
}

<?php
interface IMachineActions
{
    public function turnOn(): void;
    public function turnOff(): void;
    public function heat(): void;
    public function cool(): void;
    public function wash(): void;
}

<?php
require_once 'IMachineActions.php';

class WashingMachine implements IMachineActions
{
    public function turnOn(): void
    {
        echo "Washing machine on\n";
    }

    public function turnOff(): void
    {
        echo "Washing machine off\n";
    }

    public function heat(): void
    {
        // Not supported
        throw new Exception("Heating not supported");
    }

    public function cool(): void
    {
        // Not supported
        throw new Exception("Cooling not supported");
    }

    public function wash(): void
    {
        echo "Washing clothes\n";
    }
}
?>
```

/exercise
    ├── scr/                            # Source code 
    |     ├── classes/ 
    |     │     ├── ElectricHeater.php  # Define a class called ElectricHeater that implements two interfaces: IPowerable and IHeatable
    |     │     ├── WashingMachine.php  # Define a class called WashingMachine that implements two interfaces: IPowerable and IWashable
    |     │     ├── IHeatable.php       # Define an interface called IHeatable
    |     │     ├── IPowerable.php      # Define an interface called IPowerable
    |     │     └── IWashable.php       # Define an interface called IWashable
    |     └── index.php                 # Main script
    └── README.md                       # Exercise documentation 

