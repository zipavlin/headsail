<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class BackgroundImage extends DynamicUtility
{
    public static $name = "background-image";
    public static $group = "backgrounds";
    public static $position = 7;
    public static $property = "bg-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>bg)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'none',
		'gradient-to-t',
		'gradient-to-tr',
		'gradient-to-r',
		'gradient-to-br',
		'gradient-to-b',
		'gradient-to-bl',
		'gradient-to-l',
		'gradient-to-tl',
    ];
}
