<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class Clear extends StaticUtility
{
    public static $name = "clear";
    public static $group = "layout";
    public static $position = 4;
    public static $default_values = [
		'clear-left',
		'clear-right',
		'clear-both',
		'clear-none',
    ];
}
