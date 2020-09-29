<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class TextAlignment extends StaticUtility
{
    public static $name = "text-alignment";
    public static $group = "";
    public static $position = 12;
    public static $default_values = [
		'text-left',
		'text-center',
		'text-right',
		'text-justify',
    ];
}
