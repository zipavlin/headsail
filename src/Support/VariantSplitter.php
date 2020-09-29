<?php


namespace Zipavlin\Headsail\Support;


use Closure;

class VariantSplitter
{
    private $closure;

    public function __construct(Closure $closure)
    {
        $this->closure = $closure;
    }

    public function __invoke(array $acc, $item)
    {
        // split on variants
        if (!preg_match("/^(?:(?<variant>(?:[\w\-]+:?)+):)?(?<property>[\w\-\/]+)$/", $item, $matches)) {
            return $acc;
        }

        $variant = empty($matches['variant']) ? '_root' : $matches['variant'];
        $property = $matches['property'];

        if (!isset($acc[$variant])) {
            $acc[$variant] = [];
        }

        return ($this->closure)($acc, $variant, $property);
    }
}
