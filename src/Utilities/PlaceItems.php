<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class PlaceItems extends StaticUtility
{
    public static $name = "place-items";
    public static $group = "box alignment";
    public static $position = 7;
    public static $default_values = [
		'place-items-auto',
		'place-items-start',
		'place-items-end',
		'place-items-center',
		'place-items-stretch',
    ];
}
