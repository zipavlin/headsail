<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class Flex extends DynamicUtility
{
    public static $name = "flex";
    public static $group = "flexbox";
    public static $position = 2;
    public static $property = "flex-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>flex)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'1',
		'auto',
		'initial',
		'none',
    ];
}
