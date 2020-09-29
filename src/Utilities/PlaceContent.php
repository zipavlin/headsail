<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class PlaceContent extends StaticUtility
{
    public static $name = "place-content";
    public static $group = "box alignment";
    public static $position = 6;
    public static $default_values = [
		'place-content-center',
		'place-content-start',
		'place-content-end',
		'place-content-between',
		'place-content-around',
		'place-content-evenly',
		'place-content-stretch',
    ];
}
