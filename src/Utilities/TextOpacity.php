<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class TextOpacity extends DynamicUtility
{
    public static $name = "text-opacity";
    public static $group = "typography";
    public static $position = 14;
    public static $property = "text-opacity-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>text\-opacity)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'25',
		'50',
		'75',
		'100',
    ];
}
