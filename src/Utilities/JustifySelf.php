<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class JustifySelf extends StaticUtility
{
    public static $name = "justify-self";
    public static $group = "box alignment";
    public static $position = 2;
    public static $default_values = [
		'justify-self-auto',
		'justify-self-start',
		'justify-self-end',
		'justify-self-center',
		'justify-self-stretch',
    ];
}
