<?php

namespace Christyjoshy\FaqManager\Tests;

use Illuminate\Support\Facades\Route;

class CategoryManagementControllerTest extends TestCase
{
    /** @test */
    public function it_can_display_list_of_categories()
    {
        Route::category('test');
        $this->get('/test')->assertOk();
    }
}
