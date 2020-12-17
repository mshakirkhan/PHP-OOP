<?php
use Employee\Person as Employee;
use Customer\Person as Customer;
require('employee.php');
require('customer.php');

$empObj = new Employee;
$cusObj = new Customer;
$empObj->showData();
$cusObj->showData();

?>