<?php

namespace Zipavlin\Headsail\Utilities\Abstracts;

use Zipavlin\Headsail\Property;

abstract class DynamicUtility extends Utility
{
    public static $property;
    public static $pattern;
    public static $expandable = false;

    public static function evaluate(string $value): ?Property
    {
        if (!static::$pattern || !preg_match(static::$pattern, $value, $match)) {
            return null;
        }

        if (isset($match['variant'])) {
            if (empty($match['variant']) && isset(static::$expandable['null'])) {
                $expand = static::$expandable['null'];
            }

            if (!empty($match['variant']) && isset(static::$expandable[$match['variant']])) {
                $expand = static::$expandable[$match['variant']];
            }
        }

        return new Property(
            static::class,
            static::$property,
            (isset($match['variant']) && !empty($match['variant'])) ? $match['variant'] : null,
            (isset($match['value']) && !empty($match['value'])) ? $match['value'] : null,
            $expand ?? null
        );
    }

    public static function isStatic(): bool
    {
        return false;
    }

    public static function isDynamic(): bool
    {
        return true;
    }

}
