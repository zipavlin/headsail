<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class MaxWidth extends DynamicUtility
{
    public static $name = "max-width";
    public static $group = "sizing";
    public static $position = 2;
    public static $property = "max-w-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>max\-w)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'none',
		'xs',
		'sm',
		'md',
		'lg',
		'xl',
		'2xl',
		'3xl',
		'4xl',
		'5xl',
		'6xl',
		'full',
		'screen-sm',
		'screen-md',
		'screen-lg',
		'screen-xl',
    ];
}
