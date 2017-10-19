<?php
class A
{
    private $a = 1;
    
    public static function b()
    {
        echo $this->a;                  // Fatal error
    }
}

$a = new A();
$a->b();
