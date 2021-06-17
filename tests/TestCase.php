<?php

namespace Christyjoshy\FaqManager\Tests;

use Christyjoshy\FaqManager\FaqManagerServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Christyjoshy\\FaqManager\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            FaqManagerServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
        
        include_once __DIR__.'/../database/migrations/create_category_table.php.stub';
        include_once __DIR__.'/../database/migrations/create_faq_entries_table.php.stub';
        (new \CreateCategoryTable())->up();
        (new \CreateFaqEntriesTable())->up();
    }
}
