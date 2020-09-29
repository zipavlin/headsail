<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class Translate extends DynamicUtility
{
    public static $name = "translate";
    public static $group = "transforms";
    public static $position = 2;
    public static $property = "translate-";
    public static $expandable = false;
    public static $pattern = "/^(?<negative>\-)?(?:(?<property>translate)\-)(?:(?<variant>x|y)\-)?(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'1',
		'2',
		'3',
		'4',
		'5',
		'6',
		'8',
		'10',
		'12',
		'16',
		'20',
		'24',
		'32',
		'40',
		'48',
		'56',
		'64',
		'px',
		'full',
		'1/2',
    ];
}
