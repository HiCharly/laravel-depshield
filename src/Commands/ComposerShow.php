<?php

namespace HiCharly\LaravelDepshield\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;

class ComposerShow extends Command
{
    public $signature = 'depshield:composer:show';

    public $description = 'Run the composer show command and store results in a JSON file.';

    public function handle(): int
    {
        $process = new Process(['composer', 'show', '--format=json']);
        $process->setWorkingDirectory(base_path());
        $process->run();

        Storage::disk(config('depshield.disk_name'))->put(config('depshield.storage_path').'/composerShow.json', $process->getOutput());

        $this->info('Composer show command executed successfully.');

        return self::SUCCESS;
    }
}
