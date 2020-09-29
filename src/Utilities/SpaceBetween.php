<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class SpaceBetween extends DynamicUtility
{
    public static $name = "space-between";
    public static $group = "spacing";
    public static $position = 2;
    public static $property = "space-";
    public static $expandable = false;
    public static $pattern = "/^(?<negative>\-)?(?:(?<property>space)\-)(?:(?<variant>y|x)\-)?(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'1',
		'2',
		'3',
		'4',
		'5',
		'6',
		'8',
		'10',
		'12',
		'16',
		'20',
		'24',
		'32',
		'40',
		'48',
		'56',
		'64',
		'px',
		'reverse',
    ];
}
