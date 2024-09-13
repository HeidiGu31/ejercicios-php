<?php
// Define a Car class
class Car
{
    // Properties of the class
    public $make;
    public $model;
    public $year;

    // Constructor to initialize properties
    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method to get car details
    public function getCarInfo()
    {
        return "Car: " . $this->make . " " . $this->model . " (" . $this->year . ")";
    }
}

// Instantiate the Car class
$myCar = new Car("Toyota", "Corolla", 2020);

// Output the car's information
echo $myCar->getCarInfo();
?>