<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class Order extends DynamicUtility
{
    public static $name = "order";
    public static $group = "flexbox";
    public static $position = 5;
    public static $property = "order-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>order)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'1',
		'2',
		'3',
		'4',
		'5',
		'6',
		'7',
		'8',
		'9',
		'10',
		'11',
		'12',
		'first',
		'last',
		'none',
    ];
}
