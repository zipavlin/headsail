<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class ScreenReaders extends StaticUtility
{
    public static $name = "screen-readers";
    public static $group = "accessibility";
    public static $position = 0;
    public static $default_values = [
		'sr-only',
		'not-sr-only',
    ];
}
