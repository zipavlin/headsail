<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class GridTemplateRows extends DynamicUtility
{
    public static $name = "grid-template-rows";
    public static $group = "grid";
    public static $position = 2;
    public static $property = "grid-rows-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>grid\-rows)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'1',
		'2',
		'3',
		'4',
		'5',
		'6',
		'none',
    ];
}
