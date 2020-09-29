<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class BorderRadius extends DynamicUtility
{
    public static $name = "border-radius";
    public static $group = "borders";
    public static $position = 0;
    public static $property = "rounded";
    public static $expandable = false;
    public static $pattern = "/^(?<property>rounded)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))?$/";
    public static $default_values = [
		'none',
		'sm',
		'md',
		'lg',
		'full',
		't-none',
		'r-none',
		'b-none',
		'l-none',
		't-sm',
		'r-sm',
		'b-sm',
		'l-sm',
		't',
		'r',
		'b',
		'l',
		't-md',
		'r-md',
		'b-md',
		'l-md',
		't-lg',
		'r-lg',
		'b-lg',
		'l-lg',
		't-full',
		'r-full',
		'b-full',
		'l-full',
		'tl-none',
		'tr-none',
		'br-none',
		'bl-none',
		'tl-sm',
		'tr-sm',
		'br-sm',
		'bl-sm',
		'tl',
		'tr',
		'br',
		'bl',
		'tl-md',
		'tr-md',
		'br-md',
		'bl-md',
		'tl-lg',
		'tr-lg',
		'br-lg',
		'bl-lg',
		'tl-full',
		'tr-full',
		'br-full',
		'bl-full',
    ];
}
