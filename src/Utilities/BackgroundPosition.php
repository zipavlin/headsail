<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class BackgroundPosition extends DynamicUtility
{
    public static $name = "background-position";
    public static $group = "backgrounds";
    public static $position = 4;
    public static $property = "bg-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>bg)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'bottom',
		'center',
		'left',
		'left-bottom',
		'left-top',
		'right',
		'right-bottom',
		'right-top',
		'top',
    ];
}
