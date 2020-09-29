<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class WordBreak extends StaticUtility
{
    public static $name = "word-break";
    public static $group = "typography";
    public static $position = 19;
    public static $default_values = [
		'break-normal',
		'break-words',
		'break-all',
		'truncate',
    ];
}
