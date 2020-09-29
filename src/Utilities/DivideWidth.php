<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class DivideWidth extends DynamicUtility
{
    public static $name = "divide-width";
    public static $group = "borders";
    public static $position = 5;
    public static $property = "divide-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>divide)\-)(?:(?<variant>y|x)\-)?(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'2',
		'4',
		'8',
		'y',
		'x',
		'reverse',
    ];
}
