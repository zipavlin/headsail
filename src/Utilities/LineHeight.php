<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class LineHeight extends DynamicUtility
{
    public static $name = "line-height";
    public static $group = "typography";
    public static $position = 7;
    public static $property = "leading-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>leading)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'3',
		'4',
		'5',
		'6',
		'7',
		'8',
		'9',
		'10',
		'none',
		'tight',
		'snug',
		'normal',
		'relaxed',
		'loose',
    ];
}
