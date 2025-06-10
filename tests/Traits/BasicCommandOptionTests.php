<?php
declare(strict_types=1);

namespace Arcscore\LaravelDiscordBotTests\Traits;

use Arcscore\LaravelDiscordBot\Support\Commands\CommandOption;

trait BasicCommandOptionTests
{
    protected CommandOption $option;

    protected int $expectedType;

    public function testOptionType()
    {
        $this->assertSame($this->expectedType, $this->option->getType());
    }
}
