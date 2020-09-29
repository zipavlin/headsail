<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class AlignSelf extends StaticUtility
{
    public static $name = "align-self";
    public static $group = "box alignment";
    public static $position = 5;
    public static $default_values = [
		'self-auto',
		'self-start',
		'self-end',
		'self-center',
		'self-stretch',
    ];
}
