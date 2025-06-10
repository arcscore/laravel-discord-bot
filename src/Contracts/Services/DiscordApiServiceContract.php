<?php
declare(strict_types=1);

namespace Arcscore\LaravelDiscordBot\Contracts\Services;

use Arcscore\LaravelDiscordBot\Support\Embed;

interface DiscordApiServiceContract
{
    public function sendTextMessage(string $channelId, string $message, array $options = []): array;

    /**
     * @param string $channelId
     * @param Embed[] $embeds
     * @param array $options
     * @return void
     */
    public function sendRichTextMessage(string $channelId, array $embeds, array $components = [], array $options = []): array;
}
