<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class Resize extends StaticUtility
{
    public static $name = "resize";
    public static $group = "interactivity";
    public static $position = 4;
    public static $default_values = [
		'resize-none',
		'resize-y',
		'resize-x',
		'resize',
    ];
}
