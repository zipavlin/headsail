<?php

namespace Zipavlin\Headsail;

class Property
{
    public $utility;
    public $property;
    public $variant;
    public $value;
    public $expandable;

    public function __construct($utility = null, $property = null, $variant = null, $value = null, $expandable = null)
    {
        $this->utility = $utility;
        $this->property = $property;
        $this->variant = $variant;
        $this->value = $value;
        $this->expandable = $expandable;
    }

    public function expand(): array
    {
        if (!$this->expandable) {
            return [$this];
        }

        return array_reduce($this->expandable, function ($acc, $variant) {
            $acc[] = $this->makeVariant($variant);
            return $acc;
        }, []);
    }

    public function makeVirtual(): self
    {
        $instance = clone $this;
        $instance->utility = null;
        $instance->expandable = null;
        return $instance;
    }

    public function makeVariant($variant): self
    {
        $instance = clone $this;
        $instance->variant = $variant;
        $instance->expandable = null;
        return $instance;
    }

    public function __toString(): string
    {
        return rtrim(
            (
                $this->property
                . ($this->variant ?? "")
            ),
            "-"
        )
        . ($this->value ? "-".ltrim($this->value, "-") : "");
    }
}
