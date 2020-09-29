<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class FontSize extends DynamicUtility
{
    public static $name = "font-size";
    public static $group = "typography";
    public static $position = 1;
    public static $property = "text-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>text)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'xs',
		'sm',
		'base',
		'lg',
		'xl',
		'2xl',
		'3xl',
		'4xl',
		'5xl',
		'6xl',
    ];
}
