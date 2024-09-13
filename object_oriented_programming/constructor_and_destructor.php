<?php
// Define a Car class
class Car
{
    // Properties
    public $make;
    public $model;
    public $year;

    // Constructor to initialize properties
    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        echo "Car object created.<br>";
    }

    // Method to get car details
    public function getCarInfo()
    {
        return "Car: " . $this->make . " " . $this->model . " (" . $this->year . ")";
    }

    // Destructor
    public function __destruct()
    {
        echo "Car object destroyed.<br>";
    }
}

// Create a Car object
$myCar = new Car("Honda", "Civic", 2019);

// Output the car details
echo $myCar->getCarInfo() . "<br>";

// The destructor will be called automatically when the script ends
?>
