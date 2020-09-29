<?php

namespace Zipavlin\Headsail;

use Zipavlin\Headsail\Support\VariantSplitter;
use const Zipavlin\Headsail\Constants\UTILITIES;

class Headsail
{
    public $structure;

    /**
     * Headwind constructor.
     * @param array|string|null $input
     */
    public function __construct($input = null)
    {
        $this->structure = new Structure();
        if ($input) {
            $this->parse($input);
        }
    }

    public static function make($input = null): self
    {
        return new static($input);
    }

    public function parse($input = null): self
    {
        // normalize input
        if (is_string($input)) {
            $input = preg_replace("/[\n\r]+/", ' ', $input);
            $input = preg_replace("/\s+/", ' ', $input);
            $input = explode(' ', $input);
        }

        $input = array_reduce($input, new VariantSplitter(function ($acc, $variant, $property) {
            if (!($property_object = $this->evaluate($property))) {
                $this->structure->addVirtual($variant, $property);
                return $acc;
            }

            $acc[$variant] = array_merge($acc[$variant], $property_object->expand());
            return $acc;
        }), []);

        $this->structure->merge(new Structure($input));

        return $this;
    }

    /**
     * Alias for parse
     * @param null $input
     * @return $this
     */
    public function add($input = null): self
    {
        return $this->parse($input);
    }

    public function evaluate(string $property): ?Property
    {
        foreach (UTILITIES as $utility) {
            if (!($match = $utility::evaluate($property))) {
                continue;
            }

            if ($utility::isDynamic() && $utility::isOverlap() && !$utility::isDefaultValue($match->value)) {
                // try other utilities with this property
                foreach ($utility::getAlternatives() as $alt_utility) {
                    if (($match = $alt_utility::evaluate($property)) && $alt_utility::isDefaultValue($match->value)) {
                        return $match;
                    }
                }
                // we are not sure which overlapping utility we can choose
                // therefore we parse it with initial utility, but remove
                // it's type declaration, so we don't overwrite it
                return $match->makeVirtual();
            }

            return $match;
        }

        return null;
    }

    public function toString(): string
    {
        return $this->structure->toString();
    }

    public function __toString(): string
    {
        return $this->toString();
    }
}
