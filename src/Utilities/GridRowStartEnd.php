<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class GridRowStartEnd extends DynamicUtility
{
    public static $name = "grid-row-start-end";
    public static $group = "grid";
    public static $position = 3;
    public static $property = "row-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>row)\-)(?:(?<variant>start|span|end)\-)?(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'auto',
		'1',
		'2',
		'3',
		'4',
		'5',
		'6',
		'7',
    ];
}
