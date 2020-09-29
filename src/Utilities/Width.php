<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class Width extends DynamicUtility
{
    public static $name = "width";
    public static $group = "sizing";
    public static $position = 0;
    public static $property = "w-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>w)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
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
		'1/2',
		'1/3',
		'2/3',
		'1/4',
		'2/4',
		'3/4',
		'1/5',
		'2/5',
		'3/5',
		'4/5',
		'1/6',
		'2/6',
		'3/6',
		'4/6',
		'5/6',
		'1/12',
		'2/12',
		'3/12',
		'4/12',
		'5/12',
		'6/12',
		'7/12',
		'8/12',
		'9/12',
		'10/12',
		'11/12',
		'full',
		'screen',
    ];
}
