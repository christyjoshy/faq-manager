<?php

namespace Christyjoshy\FaqManager;

use Christyjoshy\FaqManager\Commands\FaqManagerCommand;
use Christyjoshy\FaqManager\Http\Livewire\Categories;
use Christyjoshy\FaqManager\Http\Livewire\Faq;
use Christyjoshy\FaqManager\Http\Livewire\FrontendFaq;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LivewireFaqManagerServiceProvider extends PackageServiceProvider
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
            ->hasRoute('livewire-routes')
            ->hasMigration('create_category_table')
            ->hasMigration('create_faq_entries_table')
            ->hasCommand(FaqManagerCommand::class);
    }

    public function bootingPackage()
    {
        Livewire::component('categories', Categories::class);
        Livewire::component('faq', Faq::class);
        Livewire::component('frontendfaq', FrontendFaq::class);
    }
}
