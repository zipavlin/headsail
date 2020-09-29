<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class BackgroundRepeat extends StaticUtility
{
    public static $name = "background-repeat";
    public static $group = "backgrounds";
    public static $position = 5;
    public static $default_values = [
		'bg-repeat',
		'bg-no-repeat',
		'bg-repeat-x',
		'bg-repeat-y',
		'bg-repeat-round',
		'bg-repeat-space',
    ];
}
