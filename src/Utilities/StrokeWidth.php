<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class StrokeWidth extends DynamicUtility
{
    public static $name = "stroke-width";
    public static $group = "svg";
    public static $position = 2;
    public static $property = "stroke-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>stroke)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'1',
		'2',
    ];
}
