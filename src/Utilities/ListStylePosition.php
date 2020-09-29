<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class ListStylePosition extends StaticUtility
{
    public static $name = "list-style-position";
    public static $group = "typography";
    public static $position = 9;
    public static $default_values = [
		'list-inside',
		'list-outside',
    ];
}
