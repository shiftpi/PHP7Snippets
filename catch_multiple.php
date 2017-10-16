<?php
class MyException extends Exception
{
}

class MySecondException extends Exception
{
}

try {
    throw new MySecondException();
} catch (MyException | MySecondException $e) {
    echo get_class($e);
}