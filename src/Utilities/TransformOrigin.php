<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class TransformOrigin extends DynamicUtility
{
    public static $name = "transform-origin";
    public static $group = "transforms";
    public static $position = 4;
    public static $property = "origin-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>origin)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'center',
		'top',
		'top-right',
		'right',
		'bottom-right',
		'bottom',
		'bottom-left',
		'left',
		'top-left',
    ];
}
