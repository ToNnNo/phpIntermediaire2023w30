<?php

namespace Model\Example;

class Test {
    
    public function __toString(): string
    {
        return "Class Test: ".self::class . "<br />" . 
            "__NAMESPACE__ : " . __NAMESPACE__ . "<br />" . 
            "__CLASS__ : " . __CLASS__ . "<br />" . 
            "__METHOD__ : " . __METHOD__ . "<br />"
        ;
    }
}