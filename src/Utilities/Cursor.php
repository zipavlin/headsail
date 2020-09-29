<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class Cursor extends DynamicUtility
{
    public static $name = "cursor";
    public static $group = "interactivity";
    public static $position = 1;
    public static $property = "cursor-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>cursor)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'auto',
		'default',
		'pointer',
		'wait',
		'text',
		'move',
		'not-allowed',
    ];
}
