<?php
declare(strict_types=1);

namespace Arcscore\LaravelDiscordBot\Contracts\Support\Builder;

use Illuminate\Contracts\Support\Arrayable;
use Arcscore\LaravelDiscordBot\Support\Embed;

interface EmbedBuilderContract extends Arrayable
{
    /**
     * @return Embed[]
     */
    public function getEmbeds(): array;
}
