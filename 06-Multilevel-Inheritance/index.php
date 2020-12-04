<?php 

require('Classes/One.php');
require('Classes/Two.php');
require('Classes/Three.php');
require('Classes/Four.php');

$oneObj = new One();
$twoObj = new Two();
$threeObj = new Three();
$fourObj = new Four();

echo $oneObj->test();
echo $twoObj->test();
echo $twoObj->func();
echo $threeObj->test();
echo $fourObj->test();

?>