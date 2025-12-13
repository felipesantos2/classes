<?php

class Teste
{
    private static ?Teste $_instance = null;

    private function __construct() {}

    public static function instance(): static
    {
        if (is_null(static::$_instance)) {
            $_instance = new static();
        }

        return static::$_instance;
    }

    public static function teste(): void {}
}

Singleton::instance();
