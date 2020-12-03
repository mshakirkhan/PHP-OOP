<?php 
//  We don't need to make object of class in static methods.
class Person{
    private static $name = "Shakir";
    private static $lastName = "Khan";

    public function displayName()
    {
        echo "Hello my name is: " . Person::$name . " " . Person::$lastName;
    }
}

Person::displayName();

?>