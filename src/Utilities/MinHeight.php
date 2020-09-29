<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class MinHeight extends DynamicUtility
{
    public static $name = "min-height";
    public static $group = "sizing";
    public static $position = 4;
    public static $property = "min-h-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>min\-h)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'full',
		'screen',
    ];
}
