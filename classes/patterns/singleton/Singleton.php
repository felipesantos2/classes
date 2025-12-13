<?php

class Singleton
{

    private static ?Singleton $_instance = null;

    private function __construct() {}

    public static function instance(): static
    {
        if (is_null(static::$_instance)) {
            $_instance = new static();
        }

        return static::$_instance;
    }
}


$obj = Singleton::instance();
