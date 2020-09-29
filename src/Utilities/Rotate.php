<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class Rotate extends DynamicUtility
{
    public static $name = "rotate";
    public static $group = "transforms";
    public static $position = 1;
    public static $property = "rotate-";
    public static $expandable = false;
    public static $pattern = "/^(?<negative>\-)?(?:(?<property>rotate)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'45',
		'90',
		'180',
    ];
}
