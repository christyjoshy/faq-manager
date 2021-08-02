<?php

namespace Christyjoshy\FaqManager;

use Christyjoshy\FaqManager\Commands\FaqManagerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FaqManagerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('faq-manager')
            ->hasConfigFile()
            ->hasViews()
            ->hasAssets()
            ->hasRoutes(['web','api'])
            ->hasMigration('create_category_table')
            ->hasMigration('create_faq_entries_table')
            ->hasCommand(FaqManagerCommand::class);
    }

<<<<<<< HEAD
=======
    public function bootingPackage()
    {
        Livewire::component('counter', Counter::class);
        Livewire::component('categories', Categories::class);
        Livewire::component('faq', Faq::class);
        Livewire::component('frontendfaq', FrontendFaq::class);
    }
>>>>>>> c3c046c9cf9f6ba7c966fc47316941d20b0f2080
}
