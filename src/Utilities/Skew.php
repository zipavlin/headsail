<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class Skew extends DynamicUtility
{
    public static $name = "skew";
    public static $group = "transforms";
    public static $position = 3;
    public static $property = "skew-";
    public static $expandable = false;
    public static $pattern = "/^(?<negative>\-)?(?:(?<property>skew)\-)(?:(?<variant>x|y)\-)?(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'3',
		'6',
		'12',
    ];
}
