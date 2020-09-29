<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class Floats extends StaticUtility
{
    public static $name = "floats";
    public static $group = "layout";
    public static $position = 3;
    public static $default_values = [
		'float-right',
		'float-left',
		'float-none',
		'clearfix',
    ];
}
