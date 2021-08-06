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

}
