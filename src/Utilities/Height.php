<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class Height extends DynamicUtility
{
    public static $name = "height";
    public static $group = "sizing";
    public static $position = 3;
    public static $property = "h-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>h)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
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
		'auto',
		'px',
		'full',
		'screen',
    ];
}
