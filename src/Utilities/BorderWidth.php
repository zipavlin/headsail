<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class BorderWidth extends DynamicUtility
{
    public static $name = "border-width";
    public static $group = "borders";
    public static $position = 1;
    public static $property = "border";
    public static $expandable = false;
    public static $pattern = "/^(?<property>border)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))?$/";
    public static $default_values = [
		'2',
		'4',
		'8',
		't-0',
		'r-0',
		'b-0',
		'l-0',
		't-2',
		'r-2',
		'b-2',
		'l-2',
		't-4',
		'r-4',
		'b-4',
		'l-4',
		't-8',
		'r-8',
		'b-8',
		'l-8',
		't',
		'r',
		'b',
		'l',
    ];
}
