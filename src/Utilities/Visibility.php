<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class Visibility extends StaticUtility
{
    public static $name = "visibility";
    public static $group = "layout";
    public static $position = 11;
    public static $default_values = [
		'visible',
		'invisible',
    ];
}
