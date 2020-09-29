<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class JustifyItems extends StaticUtility
{
    public static $name = "justify-items";
    public static $group = "box alignment";
    public static $position = 1;
    public static $default_values = [
		'justify-items-auto',
		'justify-items-start',
		'justify-items-end',
		'justify-items-center',
		'justify-items-stretch',
    ];
}
