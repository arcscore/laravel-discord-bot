<?php
declare(strict_types=1);

namespace Arcscore\LaravelDiscordBot\Contracts\Services;

use Illuminate\Http\Request;
use Arcscore\LaravelDiscordBot\Support\Interactions\DiscordInteractionResponse;

interface DiscordInteractionServiceContract
{
    public function handleInteractionRequest(Request $request): DiscordInteractionResponse;
}
