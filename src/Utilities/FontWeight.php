<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class FontWeight extends DynamicUtility
{
    public static $name = "font-weight";
    public static $group = "typography";
    public static $position = 4;
    public static $property = "font-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>font)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'hairline',
		'thin',
		'light',
		'normal',
		'medium',
		'semibold',
		'bold',
		'extrabold',
		'black',
    ];
}
