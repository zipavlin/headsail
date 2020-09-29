<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Property;
use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class Appearance extends StaticUtility
{
    public static $name = "appearance";
    public static $group = "interactivity";
    public static $position = 0;
    public static $default_values = [
		'appearance-none',
    ];

    public static function evaluate(string $value): ?Property
    {
        return $value === 'appearance-none' ? new Property(static::class, $value) : null;
    }
}
