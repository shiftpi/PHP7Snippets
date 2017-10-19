<?php
error_reporting(E_ALL);

class A 
{
    public function b()
    {
        echo 'ok';
    }
}

A::b();                     // Deprecated warning, but 'ok'
