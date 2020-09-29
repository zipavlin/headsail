<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class Fill extends DynamicUtility
{
    public static $name = "fill";
    public static $group = "svg";
    public static $position = 0;
    public static $property = "fill";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>fill)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'current',
    ];
}
