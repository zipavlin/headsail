<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class ZIndex extends DynamicUtility
{
    public static $name = "z-index";
    public static $group = "layout";
    public static $position = 12;
    public static $property = "z-";
    public static $expandable = false;
    public static $pattern = "/^(?<negative>\-)?(?:(?<property>z)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'10',
		'20',
		'30',
		'40',
		'50',
		'auto',
    ];
}
