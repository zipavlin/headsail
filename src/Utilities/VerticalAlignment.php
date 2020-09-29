<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class VerticalAlignment extends StaticUtility
{
    public static $name = "vertical-alignment";
    public static $group = "";
    public static $position = 17;
    public static $default_values = [
		'align-baseline',
		'align-top',
		'align-middle',
		'align-bottom',
		'align-text-top',
		'align-text-bottom',
    ];
}
