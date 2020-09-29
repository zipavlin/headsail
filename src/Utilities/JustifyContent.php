<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class JustifyContent extends StaticUtility
{
    public static $name = "justify-content";
    public static $group = "box alignment";
    public static $position = 0;
    public static $default_values = [
		'justify-start',
		'justify-end',
		'justify-center',
		'justify-between',
		'justify-around',
		'justify-evenly',
    ];
}
