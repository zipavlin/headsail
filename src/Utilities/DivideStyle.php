<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class DivideStyle extends StaticUtility
{
    public static $name = "divide-style";
    public static $group = "borders";
    public static $position = 8;
    public static $default_values = [
		'divide-solid',
		'divide-dashed',
		'divide-dotted',
		'divide-double',
		'divide-none',
    ];
}
