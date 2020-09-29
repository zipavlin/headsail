<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class TransitionDuration extends DynamicUtility
{
    public static $name = "transition-duration";
    public static $group = "transitions and animation";
    public static $position = 1;
    public static $property = "duration-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>duration)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'75',
		'100',
		'150',
		'200',
		'300',
		'500',
		'700',
		'1000',
    ];
}
