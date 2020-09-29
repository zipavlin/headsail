<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class TransitionTimingFunction extends DynamicUtility
{
    public static $name = "transition-timing-function";
    public static $group = "transitions and animation";
    public static $position = 2;
    public static $property = "ease-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>ease)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'linear',
		'in',
		'out',
		'in-out',
    ];
}
