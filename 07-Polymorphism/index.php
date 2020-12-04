<?php 

require('Student.php');
require('Result.php');

$stdObj = new Student();
$resObj = new Result();
// As you can see method is overriing here
$resObj->displayName();

?>