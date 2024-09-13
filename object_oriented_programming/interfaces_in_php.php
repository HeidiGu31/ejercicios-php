<?php
// Define a Shape interface
interface Shape
{
    // Method to calculate area
    public function calculateArea();
}

// Implement the Shape interface in a Rectangle class
class Rectangle implements Shape
{
    private $width;
    private $height;

    // Constructor to initialize width and height
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // Implement the calculateArea method
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

// Implement the Shape interface in a Circle class
class Circle implements Shape
{
    private $radius;

    // Constructor to initialize radius
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Implement the calculateArea method
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// Create a Rectangle and Circle object
$rectangle = new Rectangle(5, 10);
$circle = new Circle(7);

// Output the area of the shapes
echo "Rectangle area: " . $rectangle->calculateArea() . "<br>";  // Output: 50
echo "Circle area: " . $circle->calculateArea();                 // Output: ~153.94
?>
