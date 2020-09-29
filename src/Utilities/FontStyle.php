<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class FontStyle extends StaticUtility
{
    public static $name = "font-style";
    public static $group = "typography";
    public static $position = 3;
    public static $default_values = [
		'italic',
		'not-italic',
    ];
}
