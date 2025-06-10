<?php
declare(strict_types=1);

namespace Arcscore\LaravelDiscordBot\Support\Commands\Options;

use Arcscore\LaravelDiscordBot\Support\Commands\CommandOption;
use Arcscore\LaravelDiscordBot\Support\Traits\ApplicationCommand\HasAutoComplete;
use Arcscore\LaravelDiscordBot\Support\Traits\ApplicationCommand\HasChoices;
use Arcscore\LaravelDiscordBot\Support\Traits\MergesArrays;

class StringOption extends CommandOption
{
    use HasChoices, HasAutoComplete, MergesArrays;

    protected ?int $maxLength = null;

    public function getType(): int
    {
        return static::TYPE_STRING;
    }

    public function maxLength(int $maxLength): self
    {
        $this->maxLength = $maxLength;
        return $this;
    }

    protected function choiceTransformer(OptionChoice $choice): array
    {
        $array = $choice->toArray();
        $array['value'] = (string) $array['value'];

        return $array;
    }

    public function toArray(): array
    {
        $merge = $this->mergeChoices([]);
        $merge = $this->mergeAutocomplete($merge);

        return $this->toMergedArray(array_merge($merge, [
            'max_length' => $this->maxLength,
        ]));
    }
}
