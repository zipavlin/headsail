<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class Overflow extends StaticUtility
{
    public static $name = "overflow";
    public static $group = "layout";
    public static $position = 7;
    public static $default_values = [
		'overflow-auto',
		'overflow-hidden',
		'overflow-visible',
		'overflow-scroll',
		'overflow-x-auto',
		'overflow-y-auto',
		'overflow-x-hidden',
		'overflow-y-hidden',
		'overflow-x-visible',
		'overflow-y-visible',
		'overflow-x-scroll',
		'overflow-y-scroll',
		'scrolling-touch',
		'scrolling-auto',
    ];
}
