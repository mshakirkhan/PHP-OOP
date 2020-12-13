<?php 
abstract class AbstractClass{
    abstract protected function getValue();
    abstract protected function myFoo($params);
    
    public function printOut(){
        print $this->getValue(). "<br>";
    }
}

?>