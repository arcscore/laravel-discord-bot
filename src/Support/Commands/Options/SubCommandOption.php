<?php
declare(strict_types=1);

namespace Arcscore\LaravelDiscordBot\Support\Commands\Options;

use Arcscore\LaravelDiscordBot\Support\Commands\CommandOption;
use Arcscore\LaravelDiscordBot\Support\Traits\ApplicationCommand\NoChoiceTransformer;

class SubCommandOption extends CommandOption
{
    use NoChoiceTransformer;

    public function getType(): int
    {
        return static::TYPE_SUB_COMMAND;
    }
}
