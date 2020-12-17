<?php 
namespace index;
use my\pdo\Pdo;
require_once('pdo.php');

// If we use "use my\pdo\Pdo" we are able to make object with class name, don't need to give namespace in object.
// $myObj = new \my\pdo\pdo; 
$myObj = new Pdo;
echo $myObj->showData();

?>