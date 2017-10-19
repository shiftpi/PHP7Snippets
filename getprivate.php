<?php
class A
{
    private $b = 1;
    public $c = 2;
    
    public function __get($name)
    {
        return 3;
    }
}

$a = new A();
echo 'b: ' . $a->b . PHP_EOL;      // 3
echo 'c: ' . $a->c . PHP_EOL;      // 2
