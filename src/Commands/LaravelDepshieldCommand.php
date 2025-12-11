<?php

namespace HiCharly\LaravelDepshield\Commands;

use Illuminate\Console\Command;

class LaravelDepshieldCommand extends Command
{
    public $signature = 'laravel-depshield';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
