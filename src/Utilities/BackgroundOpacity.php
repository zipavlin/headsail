<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class BackgroundOpacity extends DynamicUtility
{
    public static $name = "background-opacity";
    public static $group = "backgrounds";
    public static $position = 3;
    public static $property = "bg-opacity-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>bg\-opacity)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'25',
		'50',
		'75',
		'100',
    ];
}
