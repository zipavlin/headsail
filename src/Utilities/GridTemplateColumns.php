<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class GridTemplateColumns extends DynamicUtility
{
    public static $name = "grid-template-columns";
    public static $group = "grid";
    public static $position = 0;
    public static $property = "grid-cols-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>grid\-cols)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
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
		'none',
    ];
}
