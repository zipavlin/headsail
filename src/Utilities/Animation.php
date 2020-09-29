<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class Animation extends DynamicUtility
{
    public static $name = "animation";
    public static $group = "transitions and animation";
    public static $position = 4;
    public static $property = "animate-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>animate)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'none',
		'spin',
		'ping',
		'pulse',
		'bounce',
    ];
}
