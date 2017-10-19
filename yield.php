<?php
function f()
{
    for ($i = 0; $i < 5; $i++) {
        echo 'next iteration' . PHP_EOL;
        yield $i;
    }
    
    return 'end';
}

$gen = f();
var_dump($gen);                         // object(Generator)

foreach ($gen as $i) {
    echo $i . PHP_EOL;                  // 0, 1, 2, 3, 4
}

echo $gen->getReturn() . PHP_EOL;       // end
