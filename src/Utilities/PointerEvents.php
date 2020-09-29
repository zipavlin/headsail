<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class PointerEvents extends StaticUtility
{
    public static $name = "pointer-events";
    public static $group = "interactivity";
    public static $position = 3;
    public static $default_values = [
		'pointer-events-none',
		'pointer-events-auto',
    ];
}
