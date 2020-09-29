<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class BackgroundAttachment extends StaticUtility
{
    public static $name = "background-attachment";
    public static $group = "backgrounds";
    public static $position = 0;
    public static $default_values = [
		'bg-fixed',
		'bg-local',
		'bg-scroll',
    ];
}
