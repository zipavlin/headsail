<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class BoxShadow extends DynamicUtility
{
    public static $name = "box-shadow";
    public static $group = "effects";
    public static $position = 0;
    public static $property = "shadow";
    public static $expandable = false;
    public static $pattern = "/^(?<property>shadow)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))?$/";
    public static $default_values = [
		'xs',
		'sm',
		'md',
		'lg',
		'xl',
		'2xl',
		'inner',
		'outline',
		'none',
    ];
}
