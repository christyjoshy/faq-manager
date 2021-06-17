<?php

namespace Christyjoshy\FaqManager\Tests;

use Christyjoshy\FaqManager\Models\Category;
use Illuminate\Support\Facades\Route;

class CategoryManagementControllerTest extends TestCase
{
    /** @test */
    public function it_can_display_list_of_categories()
    {
    
        Category::create(['name' => 'General']);
        $this->assertDatabaseCount('categories', 1);

        Route::category('test');
        $this->get('/test')->assertOk();

    }
}
