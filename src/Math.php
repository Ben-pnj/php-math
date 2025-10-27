<?php

namespace App;

class Math 
{
    public static function add($a, $b)
    {
        return $a + $b;
    }

    public static function substract($a, $b)
    {
        return $a - $b;
    }

    public static function multiply($a, $b)
    {
        return $a * $b;
    }

    public static function divide($a, $b)
    {
        if($b == 0) {
            throw new \InvalidArgumentException("Division by zero");
        }
        return $a / $b;
    }
}