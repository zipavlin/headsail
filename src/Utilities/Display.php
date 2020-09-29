<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class Display extends StaticUtility
{
    public static $name = "display";
    public static $group = "layout";
    public static $position = 2;
    public static $default_values = [
		'block',
		'inline-block',
		'inline',
		'flex',
		'inline-flex',
		'table',
		'table-caption',
		'table-cell',
		'table-column',
		'table-column-group',
		'table-footer-group',
		'table-header-group',
		'table-row-group',
		'table-row',
		'flow-root',
		'grid',
		'inline-grid',
		'contents',
		'hidden',
    ];
}
