<?php

declare(strict_types=1);

namespace App;

final class Math
{
    public static function add(float|int $a, float|int $b): float
    {
        return (float) ($a + $b);
    }

    public static function subtract(float|int $a, float|int $b): float
    {
        return (float) ($a - $b);
    }

    public static function multiply(float|int $a, float|int $b): float
    {
        return (float) ($a * $b);
    }

    public static function divide(float|int $a, float|int $b): float
    {
        if ($b == 0.0) {
            throw new \InvalidArgumentException('Division by zero');
        }
        return (float) ($a / $b);
    }
}
