<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class FlexDirection extends StaticUtility
{
    public static $name = "flex-direction";
    public static $group = "flexbox";
    public static $position = 0;
    public static $default_values = [
		'flex-row',
		'flex-row-reverse',
		'flex-col',
		'flex-col-reverse',
    ];
}
