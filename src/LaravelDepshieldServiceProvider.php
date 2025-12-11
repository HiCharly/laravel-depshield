<?php

namespace HiCharly\LaravelDepshield;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use HiCharly\LaravelDepshield\Commands\LaravelDepshieldCommand;

class LaravelDepshieldServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-depshield')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(LaravelDepshieldCommand::class);
    }
}
