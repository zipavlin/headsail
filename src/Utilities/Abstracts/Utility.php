<?php

namespace Zipavlin\Headsail\Utilities\Abstracts;

use Zipavlin\Headsail\Property;
use const Zipavlin\Headsail\Constants\OVERLAPS;

abstract class Utility
{
    public static $name;
    public static $group;
    public static $position = 999;
    public static $property;
    public static $expandable = false;
    public static $pattern;
    public static $default_values = [];

    abstract public static function evaluate(string $value): ?Property;

    abstract public static function isStatic(): bool;

    abstract public static function isDynamic(): bool;

    public static function isOverlap(): bool
    {
        return (
            static::$property &&
            array_key_exists(static::$property, OVERLAPS) &&
            in_array(static::class, OVERLAPS[static::$property])
        );
    }

    public static function isDefaultValue(string $value = null): bool
    {
        if (!$value || empty(static::$default_values)) {
            return false;
        }

        return in_array($value, static::$default_values, true);
    }

    public static function getAlternatives(): array
    {
        return static::isOverlap() ? array_diff(OVERLAPS[static::$property], [static::class]) : [];
    }
}
