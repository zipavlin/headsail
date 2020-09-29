<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class FontSmoothing extends StaticUtility
{
    public static $name = "font-smoothing";
    public static $group = "typography";
    public static $position = 2;
    public static $default_values = [
		'antialiased',
		'subpixel-antialiased',
    ];
}
