<?php
declare(strict_types=1);

function addFloat(float $a, float $b): float {
    return $a + $b;
}

function addInt(float $a, float $b): int {
    return $a + $b;
}

var_dump(addFloat(1.1, 2.2));       // float(3.3)
var_dump(addInt(1.1, 2.2));         // Fatal error
