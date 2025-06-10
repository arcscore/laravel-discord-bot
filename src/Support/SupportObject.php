<?php
declare(strict_types=1);

namespace Arcscore\LaravelDiscordBot\Support;

use Illuminate\Contracts\Support\Arrayable;
use Arcscore\LaravelDiscordBot\Support\Traits\FiltersRecursive;

abstract class SupportObject implements Arrayable
{
    use FiltersRecursive;

    public function toArray(): array
    {
        return $this->arrayFilterRecursive([]);
    }
}
