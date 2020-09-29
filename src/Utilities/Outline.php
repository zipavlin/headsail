<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Property;
use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class Outline extends StaticUtility
{
    public static $name = "outline";
    public static $group = "interactivity";
    public static $position = 2;
    public static $default_values = [
		'outline-none',
    ];

    public static function evaluate(string $value): ?Property
    {
        return $value === 'outline-none' ? new Property(static::class, $value) : null;
    }
}
