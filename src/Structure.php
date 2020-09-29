<?php

namespace Zipavlin\Headsail;

use ArrayAccess;

class Structure
{
    private $structure = [];

    public function __construct(array $input = null)
    {
        if ($input) {
            $this->structure = array_map(function ($variant_group) {
                // group by utility
                ['_virtual' => $virtual, '_utilities' => $utilities] = $this->groupByUtility($variant_group);

                return array_merge(
                    [
                        '_virtual' => $virtual,
                    ],
                    array_map(function ($properties) {
                        return $this->groupByVariant($properties);
                    }, $utilities)
                );
            }, $input);
        }
    }

    public function add(string $variant, string $property = null, string $property_variant = '_null', string $value = null): void
    {
        if (!array_key_exists($variant, $this->structure)) {
            $this->structure[$variant] = [];
        }
        $this->structure[$variant][$property_variant] = new Property(null, $property, $property_variant === '_null' ? null : $property_variant, $value);
    }

    public function addVirtual(string $variant, string $property): void
    {
        if (!array_key_exists($variant, $this->structure)) {
            $this->structure[$variant] = [];
        }
        if (!array_key_exists('_virtual', $this->structure[$variant])) {
            $this->structure[$variant]['_virtual'] = [];
        }
        $this->structure[$variant]['_virtual'][] = new Property(null, $property, null, null);
    }

    public function merge(Structure $structure): void
    {
        $structure = $structure->toArray();
        foreach ($structure as $variant => $properties) {
            if (!array_key_exists($variant, $this->structure)) {
                $this->structure[$variant] = [];
            }

            foreach ($properties as $property => $utilities) {
                if (!array_key_exists($property, $this->structure[$variant])) {
                    $this->structure[$variant][$property] = [];
                }
                $this->structure[$variant][$property] = array_merge($this->structure[$variant][$property], $structure[$variant][$property]);
            }
        }
    }

    public function toArray(): array
    {
        return $this->structure;
    }

    public function toFlatArray(): array
    {
        return array_map(
            static function ($properties) {
                return array_merge(
                    ...array_values(
                        array_map('array_values', $properties)
                    )
                );
            },
            $this->structure
        );
    }

    public function toString(): string
    {
        $structure = $this->toFlatArray();
        return implode(
            " ",
            array_map(
                static function ($properties, $variant) {
                    $variant = ($variant === '_root' ? '' : "$variant:");
                    return implode(
                        " ",
                        array_map(
                            static function ($utility) use ($variant) {
                                return $variant . ((string) $utility);
                            },
                            $properties
                        )
                    );
                },
                $structure,
                array_keys($structure)
            )
        );
    }

    protected function groupByUtility(array $array): array
    {
        return array_reduce($array, static function ($acc, $utility) {
            if ($utility->utility) {
                if (!array_key_exists($utility->utility, $acc['_utilities'])) {
                    $acc['_utilities'][$utility->utility] = [];
                }
                $acc['_utilities'][$utility->utility][] = $utility;
            } else {
                $acc['_virtual'][] = $utility;
            }
            return $acc;
        }, ['_virtual' => [], '_utilities' => []]);
    }

    protected function groupByVariant(array $array): array
    {
        return array_reduce($array, static function ($acc, $utility) {
            $acc[$utility->variant ?? '_null'] = $utility;
            return $acc;
        }, []);
    }
}
