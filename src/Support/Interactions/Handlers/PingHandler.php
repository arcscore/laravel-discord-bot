<?php
declare(strict_types=1);

namespace Arcscore\LaravelDiscordBot\Support\Interactions\Handlers;

use Arcscore\LaravelDiscordBot\Support\Interactions\DiscordInteractionResponse;
use Arcscore\LaravelDiscordBot\Support\Interactions\InteractionHandler;

class PingHandler extends InteractionHandler
{
    public function handle($request): DiscordInteractionResponse
    {
        return new DiscordInteractionResponse(static::RESPONSE_TYPE_PONG);
    }
}
