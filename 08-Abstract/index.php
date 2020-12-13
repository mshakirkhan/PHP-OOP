<?php 

require('AbstractClass.php');
require('Myclass.php');

$classObj = new Myclass();
$classObj->printOut();
echo $classObj->myfoo(150);

?>