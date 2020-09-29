<?php

namespace Zipavlin\Headsail\Support;

class GroupBy
{
    private $key;
    private $unique;

    public function __construct(string $key, bool $unique = false)
    {
        $this->key = $key;
        $this->unique = $unique;
    }

    public function __invoke($acc, $item)
    {
        if (is_array($item)) {
            $item_key = $item[$this->key];
        } else {
            $item_key = $item->{$this->key};
        }

        $item_key = $item_key ?? '_root';

        if ($this->unique) {
            $acc[$item_key] = $item;
        } else {
            if (!array_key_exists($item_key, $acc)) {
                $acc[$item_key] = [];
            }

            $acc[$item_key][] = $item;
        }

        return $acc;
    }


}
