<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class Position extends StaticUtility
{
    public static $name = "position";
    public static $group = "layout";
    public static $position = 9;
    public static $default_values = [
		'static',
		'fixed',
		'absolute',
		'relative',
		'sticky',
    ];
}
