<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class TextDecoration extends StaticUtility
{
    public static $name = "text-decoration";
    public static $group = "typography";
    public static $position = 15;
    public static $default_values = [
		'underline',
		'line-through',
		'no-underline',
    ];
}
