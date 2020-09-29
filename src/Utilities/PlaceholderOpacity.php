<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class PlaceholderOpacity extends DynamicUtility
{
    public static $name = "placeholder-opacity";
    public static $group = "typography";
    public static $position = 11;
    public static $property = "placeholder-opacity-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>placeholder\-opacity)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'25',
		'50',
		'75',
		'100',
    ];
}
