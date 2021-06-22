<?php

namespace Christyjoshy\FaqManager\Tests;

use Christyjoshy\FaqManager\Models\Category;
use Illuminate\Support\Facades\Route;

class CategoryManagementControllerTest extends TestCase
{
    /** @test */
    public function it_can_create_and_list_categories()
    {
        Category::create(['name' => 'General']);
        $this->assertDatabaseCount('categories', 1);

        // Route::category('test');
        // $this->get('/test')->assertOk();
    }

    /** @test */
    public function get_config()
    {
        $question = config('faq-manager.question_prefix');
        $this->assertSame($question, 'Q');
        $question = config('faq-manager.answer_prefix');
        $this->assertSame($question, 'A');
        $question = config('faq-manager.category_title_show');
        $this->assertSame($question, true);
    }
}
