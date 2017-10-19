<?php
$a = 2;

function b()
{
    static $a;
    $a++;
    echo $a . PHP_EOL;
}

echo $a . PHP_EOL;      // 2
b();                    // 1
echo $a . PHP_EOL;      // 2
$a++;
echo $a . PHP_EOL;      // 3
b();                    // 2
echo $a . PHP_EOL;      // 3
