<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class FlexWrap extends StaticUtility
{
    public static $name = "flex-wrap";
    public static $group = "flexbox";
    public static $position = 1;
    public static $default_values = [
		'flex-wrap',
		'flex-wrap-reverse',
		'flex-no-wrap',
    ];
}
