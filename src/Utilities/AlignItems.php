<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class AlignItems extends StaticUtility
{
    public static $name = "align-items";
    public static $group = "box alignment";
    public static $position = 4;
    public static $default_values = [
		'items-start',
		'items-end',
		'items-center',
		'items-baseline',
		'items-stretch',
    ];
}
