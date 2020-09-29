<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class TableLayout extends StaticUtility
{
    public static $name = "table-layout";
    public static $group = "tables";
    public static $position = 1;
    public static $default_values = [
		'table-auto',
		'table-fixed',
    ];
}
