<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class FlexGrow extends DynamicUtility
{
    public static $name = "flex-grow";
    public static $group = "flexbox";
    public static $position = 3;
    public static $property = "flex-grow";
    public static $expandable = false;
    public static $pattern = "/^(?<property>flex\-grow)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))?$/";
    public static $default_values = [

    ];
}
