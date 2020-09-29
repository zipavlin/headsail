<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class ObjectFit extends StaticUtility
{
    public static $name = "object-fit";
    public static $group = "layout";
    public static $position = 5;
    public static $default_values = [
		'object-contain',
		'object-cover',
		'object-fill',
		'object-none',
		'object-scale-down',
    ];
}
