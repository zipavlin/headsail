<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class LetterSpacing extends DynamicUtility
{
    public static $name = "letter-spacing";
    public static $group = "typography";
    public static $position = 6;
    public static $property = "tracking-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>tracking)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'tighter',
		'tight',
		'normal',
		'wide',
		'wider',
		'widest',
    ];
}
