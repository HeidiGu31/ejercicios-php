<?php
// Define a Person class
class Person
{
    // Private properties
    private $name;
    private $age;

    // Setter for name
    public function setName($name)
    {
        $this->name = $name;
    }

    // Getter for name
    public function getName()
    {
        return $this->name;
    }

    // Setter for age
    public function setAge($age)
    {
        if ($age > 0) {
            $this->age = $age;
        }
    }

    // Getter for age
    public function getAge()
    {
        return $this->age;
    }
}

// Create a Person object
$person = new Person();

// Set the name and age using setters
$person->setName("Alice");
$person->setAge(25);

// Output the person's information using getters
echo "Name: " . $person->getName() . "<br>";
echo "Age: " . $person->getAge();
?>
