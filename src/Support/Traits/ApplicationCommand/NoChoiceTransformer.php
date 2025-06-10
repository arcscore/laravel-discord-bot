<?php
declare(strict_types=1);

namespace Arcscore\LaravelDiscordBot\Support\Traits\ApplicationCommand;

use Arcscore\LaravelDiscordBot\Support\Commands\Options\OptionChoice;

trait NoChoiceTransformer
{
    public function choiceTransformer(OptionChoice $choice): array
    {
        return $choice->toArray();
    }
}
