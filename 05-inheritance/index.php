<?php 

require('Classes/Employee.php');
require('Classes/Salary.php');

$salaryObj = new Salary("Muhammad Shakir Khan", 100000);
echo "Name: " . $salaryObj->getEmpName(), PHP_EOL;
echo "Employee Salary: " . $salaryObj->empGetSalary();

?>