<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class BorderStyle extends StaticUtility
{
    public static $name = "border-style";
    public static $group = "borders";
    public static $position = 4;
    public static $default_values = [
		'border-solid',
		'border-dashed',
		'border-dotted',
		'border-double',
		'border-none',
    ];
}
