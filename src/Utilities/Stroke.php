<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class Stroke extends DynamicUtility
{
    public static $name = "stroke";
    public static $group = "svg";
    public static $position = 1;
    public static $property = "stroke";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>stroke)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'current',
    ];
}
