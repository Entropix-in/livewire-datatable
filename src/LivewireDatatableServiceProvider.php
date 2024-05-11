<?php

namespace Entropix\LivewireDatatable;

use Entropix\LivewireDatatable\Commands\LivewireDatatableCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LivewireDatatableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('livewire-datatable')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_livewire-datatable_table')
            ->hasCommand(LivewireDatatableCommand::class);
    }
}
