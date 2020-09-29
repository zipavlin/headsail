<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class AlignContent extends StaticUtility
{
    public static $name = "align-content";
    public static $group = "box alignment";
    public static $position = 3;
    public static $default_values = [
		'content-center',
		'content-start',
		'content-end',
		'content-between',
		'content-around',
		'content-evenly',
    ];
}
