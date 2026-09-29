<?php

declare(strict_types=1);

namespace Quaxis\Hello;

final class Hello
{
    public static function greet(string $name = 'World'): string
    {
        return "Hello, {$name}!";
    }
}
