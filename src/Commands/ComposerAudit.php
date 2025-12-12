<?php

namespace HiCharly\LaravelDepshield\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;

class ComposerAudit extends Command
{
    public $signature = 'depshield:composer:audit';

    public $description = 'Run the composer audit command and store results in a JSON file.';

    public function handle(): int
    {
        $process = new Process(['composer', 'audit', '--format=json']);
        $process->setWorkingDirectory(base_path());
        $process->run();

        Storage::disk(config('depshield.disk_name'))->put(config('depshield.storage_path').'/composerAudit.json', $process->getOutput());

        $this->info('Composer audit command executed successfully.');

        return self::SUCCESS;
    }
}
