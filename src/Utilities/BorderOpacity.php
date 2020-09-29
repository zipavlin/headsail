<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class BorderOpacity extends DynamicUtility
{
    public static $name = "border-opacity";
    public static $group = "borders";
    public static $position = 3;
    public static $property = "border-opacity-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>border\-opacity)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'25',
		'50',
		'75',
		'100',
    ];
}
