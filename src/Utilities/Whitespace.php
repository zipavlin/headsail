<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class Whitespace extends StaticUtility
{
    public static $name = "whitespace";
    public static $group = "typography";
    public static $position = 18;
    public static $default_values = [
		'whitespace-normal',
		'whitespace-no-wrap',
		'whitespace-pre',
		'whitespace-pre-line',
		'whitespace-pre-wrap',
    ];
}
