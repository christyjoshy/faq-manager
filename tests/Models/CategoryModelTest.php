<?php

namespace Christyjoshy\FaqManager\Tests\Models;

use Christyjoshy\FaqManager\Models\Category;
use Christyjoshy\FaqManager\Models\FaqEntry;
use Christyjoshy\FaqManager\Tests\TestCase;
use Illuminate\Support\Facades\Route;

class CategoryModelTest extends TestCase
{
     /** @test */
    public function this_will_create_a_categoy_model()
    {
        Category::create(['name' => 'General']);

        $this->assertDatabaseCount('categories',1);
    }
   
}
