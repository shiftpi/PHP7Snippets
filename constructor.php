<?php
class A 
{
    protected $a = 1;
    
    // public function __construct() { }
    
    public function a()
    {
        echo 'a: ' . $this->a++ . PHP_EOL;          // 10
    }
}

class B extends A
{
    protected $a = 10;
    
    public function c()
    {
        echo 'b: ' . $this->a++ . PHP_EOL;          // 11
        $this->a();                                 // 12
    }
}

$b = new B();
$b->c();
