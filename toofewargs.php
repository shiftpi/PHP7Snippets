<?php
function f($a) 
{
}

substr('abc');       // Still a warning
f();                 // but fatal error since PHP7.1
