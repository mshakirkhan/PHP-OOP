<?php 

// Important Points:
// 1. Class name can start with character or underscore.
// 2. $this is a variable that refres to the current object.
// 3. Class objects are always passed by reference.

class Person{
    private $__name;

    public function setName($name)
    {
        $this->__name = $name;
    }
    public function getName()
    {
        return $this->__name;
    }

    protected function __talk()
    {

    }

    public function add($num)
    {
        $num = $num + 10;
        return $num;
    }
}

$myPerson = new Person();
$myPerson->setName("Muhammad Shakir Khan");
echo $myPerson->getName();

?>