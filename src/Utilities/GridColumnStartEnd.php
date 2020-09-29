<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class GridColumnStartEnd extends DynamicUtility
{
    public static $name = "grid-column-start-end";
    public static $group = "grid";
    public static $position = 1;
    public static $property = "col-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>col)\-)(?:(?<variant>start|span|end)\-)?(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'auto',
		'1',
		'2',
		'3',
		'4',
		'5',
		'6',
		'7',
		'8',
		'9',
		'10',
		'11',
		'12',
		'13',
    ];
}
