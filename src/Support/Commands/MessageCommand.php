<?php
declare(strict_types=1);

namespace Arcscore\LaravelDiscordBot\Support\Commands;

use Arcscore\LaravelDiscordBot\Support\Command;
use Arcscore\LaravelDiscordBot\Support\Traits\MergesArrays;

class MessageCommand extends Command
{
    use MergesArrays;

    public function getType(): int
    {
        return static::TYPE_MESSAGE;
    }
}
