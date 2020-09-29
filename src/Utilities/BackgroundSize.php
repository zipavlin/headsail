<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class BackgroundSize extends DynamicUtility
{
    public static $name = "background-size";
    public static $group = "backgrounds";
    public static $position = 6;
    public static $property = "bg-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>bg)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'auto',
		'cover',
		'contain',
    ];
}
