<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class OverscrollBehavior extends StaticUtility
{
    public static $name = "overscroll-behavior";
    public static $group = "layout";
    public static $position = 8;
    public static $default_values = [
		'overscroll-auto',
		'overscroll-contain',
		'overscroll-none',
		'overscroll-y-auto',
		'overscroll-y-contain',
		'overscroll-y-none',
		'overscroll-x-auto',
		'overscroll-x-contain',
		'overscroll-x-none',
    ];
}
