<?php

class Myclass extends AbstractClass{
    protected function getValue(){
        return "My Class";
    }

    public function myFoo($params){
        return $this->getValue() . "->MyFoo ('{$params}') Called <br>";
    }
}

?>