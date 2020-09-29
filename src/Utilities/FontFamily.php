<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class FontFamily extends DynamicUtility
{
    public static $name = "font-family";
    public static $group = "typography";
    public static $position = 0;
    public static $property = "font-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>font)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'sans',
		'serif',
		'mono',
    ];
}
