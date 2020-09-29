<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class BorderCollapse extends StaticUtility
{
    public static $name = "border-collapse";
    public static $group = "tables";
    public static $position = 0;
    public static $default_values = [
		'border-collapse',
		'border-separate',
    ];
}
