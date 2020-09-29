<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class TransitionDelay extends DynamicUtility
{
    public static $name = "transition-delay";
    public static $group = "transitions and animation";
    public static $position = 3;
    public static $property = "delay-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>delay)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
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
