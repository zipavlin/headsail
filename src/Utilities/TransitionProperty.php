<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class TransitionProperty extends DynamicUtility
{
    public static $name = "transition-property";
    public static $group = "transitions and animation";
    public static $position = 0;
    public static $property = "transition";
    public static $expandable = false;
    public static $pattern = "/^(?<property>transition)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))?$/";
    public static $default_values = [
		'none',
		'all',
		'colors',
		'opacity',
		'shadow',
		'transform',
    ];
}
