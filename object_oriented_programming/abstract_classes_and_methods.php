<?php
// Define an abstract class Animal
abstract class Animal
{
    // Abstract method makeSound
    abstract public function makeSound();
}

// Extend the Animal class to create a Dog class
class Dog extends Animal
{
    // Implement the abstract method
    public function makeSound()
    {
        return "Woof!";
    }
}

// Extend the Animal class to create a Cat class
class Cat extends Animal
{
    // Implement the abstract method
    public function makeSound()
    {
        return "Meow!";
    }
}

// Create objects of Dog and Cat
$dog = new Dog();
$cat = new Cat();

// Output the sounds they make
echo "Dog: " . $dog->makeSound() . "<br>";  // Output: Woof!
echo "Cat: " . $cat->makeSound();           // Output: Meow!
?>
