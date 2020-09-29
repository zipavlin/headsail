<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class Opacity extends DynamicUtility
{
    public static $name = "opacity";
    public static $group = "effects";
    public static $position = 1;
    public static $property = "opacity-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>opacity)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'25',
		'50',
		'75',
		'100',
    ];
}
