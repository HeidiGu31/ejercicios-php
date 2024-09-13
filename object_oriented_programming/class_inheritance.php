<?php
// Define a base class Vehicle
class Vehicle
{
    // Method to start the engine
    public function startEngine()
    {
        return "Engine started!";
    }
}

// Extend the Vehicle class to create a Car class
class Car extends Vehicle
{
    // Override the startEngine method
    public function startEngine()
    {
        return "Car engine started!";
    }
}

// Extend the Vehicle class to create a Truck class
class Truck extends Vehicle
{
    // Override the startEngine method
    public function startEngine()
    {
        return "Truck engine started!";
    }
}

// Instantiate the Car and Truck classes
$myCar = new Car();
$myTruck = new Truck();

// Output the start engine messages
echo $myCar->startEngine() . "<br>";  // Output: Car engine started!
echo $myTruck->startEngine();         // Output: Truck engine started!
?>