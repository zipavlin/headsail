<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class PlaceSelf extends StaticUtility
{
    public static $name = "place-self";
    public static $group = "box alignment";
    public static $position = 8;
    public static $default_values = [
		'place-self-auto',
		'place-self-start',
		'place-self-end',
		'place-self-center',
		'place-self-stretch',
    ];
}
