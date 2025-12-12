<?php

namespace HiCharly\LaravelDepshield;

use HiCharly\LaravelDepshield\Commands\ComposerAudit;
use HiCharly\LaravelDepshield\Commands\ComposerShow;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasCommand(ComposerAudit::class)
            ->hasCommand(ComposerShow::class);
    }
}
