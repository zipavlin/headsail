<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class Scale extends DynamicUtility
{
    public static $name = "scale";
    public static $group = "transforms";
    public static $position = 0;
    public static $property = "scale-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>scale)\-)(?:(?<variant>x|y)\-)?(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'50',
		'75',
		'90',
		'95',
		'100',
		'105',
		'110',
		'125',
		'150',
    ];
}
