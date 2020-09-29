<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class MinWidth extends DynamicUtility
{
    public static $name = "min-width";
    public static $group = "sizing";
    public static $position = 1;
    public static $property = "min-w-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>min\-w)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'full',
    ];
}
