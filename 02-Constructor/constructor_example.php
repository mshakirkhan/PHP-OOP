<?php 

// Constructor are executed in object creation time.

class Person{
    public function __construct(){
        echo "Welcome to our website";
    }
}

$myClass = new Person();

?>