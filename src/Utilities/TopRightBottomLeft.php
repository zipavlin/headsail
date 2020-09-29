<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class TopRightBottomLeft extends DynamicUtility
{
    public static $name = "top-right-bottom-left";
    public static $group = "layout";
    public static $position = 10;
    public static $property = "inset|top|right|bottom|left";
    public static $expandable = false;
    public static $pattern = "/^(?<negative>\-)?(?:(?<property>inset|top|right|bottom|left)\-)(?:(?<variant>y|x)\-)?(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'auto',
    ];
}
