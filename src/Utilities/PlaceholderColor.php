<?php

namespace Zipavlin\Headsail\Utilities;

use Zipavlin\Headsail\Utilities\Abstracts\DynamicUtility;

class PlaceholderColor extends DynamicUtility
{
    public static $name = "placeholder-color";
    public static $group = "typography";
    public static $position = 10;
    public static $property = "placeholder-";
    public static $expandable = false;
    public static $pattern = "/^(?:(?<property>placeholder)\-)(?:\-?(?<=\-)(?<value>[\w\-\/:]+))$/";
    public static $default_values = [
		'transparent::placeholder',
		'current::placeholder',
		'black::placeholder',
		'white::placeholder',
		'gray-100::placeholder',
		'gray-200::placeholder',
		'gray-300::placeholder',
		'gray-400::placeholder',
		'gray-500::placeholder',
		'gray-600::placeholder',
		'gray-700::placeholder',
		'gray-800::placeholder',
		'gray-900::placeholder',
		'red-100::placeholder',
		'red-200::placeholder',
		'red-300::placeholder',
		'red-400::placeholder',
		'red-500::placeholder',
		'red-600::placeholder',
		'red-700::placeholder',
		'red-800::placeholder',
		'red-900::placeholder',
		'orange-100::placeholder',
		'orange-200::placeholder',
		'orange-300::placeholder',
		'orange-400::placeholder',
		'orange-500::placeholder',
		'orange-600::placeholder',
		'orange-700::placeholder',
		'orange-800::placeholder',
		'orange-900::placeholder',
		'yellow-100::placeholder',
		'yellow-200::placeholder',
		'yellow-300::placeholder',
		'yellow-400::placeholder',
		'yellow-500::placeholder',
		'yellow-600::placeholder',
		'yellow-700::placeholder',
		'yellow-800::placeholder',
		'yellow-900::placeholder',
		'green-100::placeholder',
		'green-200::placeholder',
		'green-300::placeholder',
		'green-400::placeholder',
		'green-500::placeholder',
		'green-600::placeholder',
		'green-700::placeholder',
		'green-800::placeholder',
		'green-900::placeholder',
		'teal-100::placeholder',
		'teal-200::placeholder',
		'teal-300::placeholder',
		'teal-400::placeholder',
		'teal-500::placeholder',
		'teal-600::placeholder',
		'teal-700::placeholder',
		'teal-800::placeholder',
		'teal-900::placeholder',
		'blue-100::placeholder',
		'blue-200::placeholder',
		'blue-300::placeholder',
		'blue-400::placeholder',
		'blue-500::placeholder',
		'blue-600::placeholder',
		'blue-700::placeholder',
		'blue-800::placeholder',
		'blue-900::placeholder',
		'indigo-100::placeholder',
		'indigo-200::placeholder',
		'indigo-300::placeholder',
		'indigo-400::placeholder',
		'indigo-500::placeholder',
		'indigo-600::placeholder',
		'indigo-700::placeholder',
		'indigo-800::placeholder',
		'indigo-900::placeholder',
		'purple-100::placeholder',
		'purple-200::placeholder',
		'purple-300::placeholder',
		'purple-400::placeholder',
		'purple-500::placeholder',
		'purple-600::placeholder',
		'purple-700::placeholder',
		'purple-800::placeholder',
		'purple-900::placeholder',
		'pink-100::placeholder',
		'pink-200::placeholder',
		'pink-300::placeholder',
		'pink-400::placeholder',
		'pink-500::placeholder',
		'pink-600::placeholder',
		'pink-700::placeholder',
		'pink-800::placeholder',
		'pink-900::placeholder',
    ];
}
