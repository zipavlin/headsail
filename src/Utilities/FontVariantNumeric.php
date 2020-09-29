<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\StaticUtility;

class FontVariantNumeric extends StaticUtility
{
    public static $name = "font-variant-numeric";
    public static $group = "typography";
    public static $position = 5;
    public static $default_values = [
		'normal-nums',
		'ordinal',
		'slashed-zero',
		'lining-nums',
		'oldstyle-nums',
		'proportional-nums',
		'tabular-nums',
		'diagonal-fractions',
		'stacked-fractions',
    ];
}
