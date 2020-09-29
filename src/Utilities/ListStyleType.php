<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class ListStyleType extends DynamicUtility
{
    public static $name = "list-style-type";
    public static $group = "typography";
    public static $position = 8;
    public static $property = "list-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>list)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'none',
		'disc',
		'decimal',
    ];
}
