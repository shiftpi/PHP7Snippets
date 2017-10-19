<?php
error_reporting(E_ALL);
$a = new stdClass();

if ($a instanceof MyClass) {
    echo 'MyClass' . PHP_EOL;
} else {
    echo 'Not MyClass' . PHP_EOL;                     // <=
}

if (is_subclass_of($a, 'MyClass')) {
    echo 'MyClass' . PHP_EOL;
} else {
    echo 'Not MyClass' . PHP_EOL;                     // <=
}

// No errors
