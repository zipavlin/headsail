<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class MaxHeight extends DynamicUtility
{
    public static $name = "max-height";
    public static $group = "sizing";
    public static $position = 5;
    public static $property = "max-h-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>max\-h)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'full',
		'screen',
    ];
}
