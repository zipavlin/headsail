<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class Gap extends DynamicUtility
{
    public static $name = "gap";
    public static $group = "grid";
    public static $position = 5;
    public static $property = "gap-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>gap)\-)(?:(?<variant>x|y)\-)?(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
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
    ];
}
