<?php

namespace Zipavlin\Headsail\Utilities\Abstracts;

use Zipavlin\Headsail\Property;

abstract class StaticUtility extends Utility
{
    public static function evaluate(string $value): ?Property
    {
        return static::isDefaultValue($value) ? new Property(static::class, $value) : null;
    }

    public static function isStatic(): bool
    {
        return true;
    }

    public static function isDynamic(): bool
    {
        return false;
    }
}
