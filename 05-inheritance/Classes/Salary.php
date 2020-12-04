<?php 

class Salary extends Employee {
    private $__salary = 0;
    function __construct($name, $salary){
        $this->setEmpName($name);
        $this->empSalary($salary);
    }

    public function empSalary($salary){
        $this->__salary = $salary;
    }

    public function empGetSalary(){
       return $this->__salary;
    }
}

?>