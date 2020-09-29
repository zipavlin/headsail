<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class GridAutoFlow extends StaticUtility
{
    public static $name = "grid-auto-flow";
    public static $group = "grid";
    public static $position = 4;
    public static $default_values = [
		'grid-flow-row',
		'grid-flow-col',
		'grid-flow-row-dense',
		'grid-flow-col-dense',
    ];
}
