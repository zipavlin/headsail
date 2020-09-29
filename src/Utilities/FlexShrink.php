<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class FlexShrink extends DynamicUtility
{
    public static $name = "flex-shrink";
    public static $group = "flexbox";
    public static $position = 4;
    public static $property = "flex-shrink";
    public static $expandable = false;
    public static $pattern = "/^(?<property>flex\-shrink)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))?$/";
    public static $default_values = [

    ];
}
