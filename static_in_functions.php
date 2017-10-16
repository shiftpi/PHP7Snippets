<?php
$a = 2;
$b = 3;

function test() {
  global $b;
  echo "global \$b: $b" . PHP_EOL;
  
  static $a;
  echo "static \$a: " . var_export($a, true) . PHP_EOL;
  3
  $a++;
  echo "\$a++: $a" . PHP_EOL;
  
  $b += $a;
  echo "\$b += \$a: $b" . PHP_EOL;
  
  global $a;
  echo "global \$a: $a" . PHP_EOL;
  
  $a += 2;
  echo "\$a += 2: $a" . PHP_EOL;
  echo '============' . PHP_EOL;
}

test();
test();
test();

echo "$a, $b";