<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class Margin extends DynamicUtility
{
    public static $name = "margin";
    public static $group = "spacing";
    public static $position = 1;
    public static $property = "m";
    public static $expandable = ['null' => ['t', 'r', 'b', 'l'], 'x' => ['l', 'r'], 'y' => ['t', 'b']];
    public static $pattern = "/^(?<negative>\-)?(?<property>m)(?:(?<variant>y|x|t|r|b|l)\-)?(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
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
		'auto',
		'px',
    ];
}
