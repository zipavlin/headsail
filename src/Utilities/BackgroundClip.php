<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class BackgroundClip extends StaticUtility
{
    public static $name = "background-clip";
    public static $group = "backgrounds";
    public static $position = 1;
    public static $default_values = [
		'bg-clip-border',
		'bg-clip-padding',
		'bg-clip-content',
		'bg-clip-text',
    ];
}
