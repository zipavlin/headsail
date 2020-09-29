<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Property;
use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class Container extends StaticUtility
{
    public static $name = "container";
    public static $group = "layout";
    public static $position = 0;
    public static $default_values = [
		'container',
    ];

    public static function evaluate(string $value): ?Property
    {
        return $value === 'container' ? new Property(static::class, $value) : null;
    }
}
