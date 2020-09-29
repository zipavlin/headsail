<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class BoxSizing extends StaticUtility
{
    public static $name = "box-sizing";
    public static $group = "layout";
    public static $position = 1;
    public static $default_values = [
		'box-border',
		'box-content',
    ];
}
