<?php

class IoC {

    protected static $registry = [];

    public static function bind($name, Callable $resolver)
    {
        static::$registry[$name] = $resolver;
    }

    public static function make($name)
    {
        if (isset(static::$registry[$name]))
        {
            $resolver = static::$registry[$name];

            return $resolver();
        }

        throw new Exception('Alias does not exist in the IoC registry.');
    }
}

