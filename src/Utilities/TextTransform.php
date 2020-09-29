<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class TextTransform extends StaticUtility
{
    public static $name = "text-transform";
    public static $group = "typography";
    public static $position = 16;
    public static $default_values = [
		'uppercase',
		'lowercase',
		'capitalize',
		'normal-case',
    ];
}
