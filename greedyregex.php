<?php
$html = '<p>PHP</p>';

preg_match('/<.*>/', $html, $greedy);
echo 'Greedy: ' .  $greedy[0] . PHP_EOL;            // <p>PHP</p>

preg_match('/<.*>/U', $html, $nongreedy);
echo 'Non greedy: ' .  $nongreedy[0] . PHP_EOL;     // <p>
