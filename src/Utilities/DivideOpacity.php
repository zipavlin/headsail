<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class DivideOpacity extends DynamicUtility
{
    public static $name = "divide-opacity";
    public static $group = "borders";
    public static $position = 7;
    public static $property = "divide-opacity-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>divide\-opacity)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'25',
		'50',
		'75',
		'100',
    ];
}
