<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class UserSelect extends StaticUtility
{
    public static $name = "user-select";
    public static $group = "interactivity";
    public static $position = 5;
    public static $default_values = [
		'select-none',
		'select-text',
		'select-all',
		'select-auto',
    ];
}
