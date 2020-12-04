<?php 

class Employee{
    private $__empName;

    public function setEmpName($name){
        $this->__empName = $name;
    }

    public function getEmpName(){
        return $this->__empName;
    }
}

?>