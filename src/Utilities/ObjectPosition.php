<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class ObjectPosition extends DynamicUtility
{
    public static $name = "object-position";
    public static $group = "layout";
    public static $position = 6;
    public static $property = "object-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>object)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'bottom',
		'center',
		'left',
		'left-bottom',
		'left-top',
		'right',
		'right-bottom',
		'right-top',
		'top',
    ];
}
