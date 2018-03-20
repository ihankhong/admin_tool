<?php

abstract class BaseEnum
{
    private static $cache = null;

    public static function constCache()
    {
        if (self::$cache === null) {
            self::$cache = [];
        }

        $calledClass = get_called_class();

        if (!array_key_exists($calledClass, self::$cache)) {
            self::$cache[$calledClass] = array_change_key_case((new \ReflectionClass($calledClass))->getConstants(), CASE_UPPER);
        }

        return self::$cache[$calledClass];
    }

    public static function isValidName($name)
    {
        return isset(self::constCache()[strtoupper($name)]);
    }

    public static function isValidValue($value)
    {
        return in_array($value, self::constCache());
    }

    public static function toValue($name)
    {
        $constCache = self::constCache();
        $upperName = strtoupper($name);

        if (!isset($constCache[$upperName])) {
            throw new Exception('Undefined name: '.$name);
        }

        return $constCache[$upperName];
    }

    public static function toName($value)
    {
        $name = array_search($value, self::constCache());

        if ($name === false) {
            throw new Exception('Undefined value: '.$value);
        }

        return $name;
    }
}
