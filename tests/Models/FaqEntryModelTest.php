<?php

namespace Christyjoshy\FaqManager\Tests\Models;

use Christyjoshy\FaqManager\Models\Category;
use Christyjoshy\FaqManager\Models\FaqEntry;
use Christyjoshy\FaqManager\Tests\TestCase;
use Illuminate\Support\Facades\Route;

class FaqEntryModelTest extends TestCase
{
     /** @test */
    public function this_will_create_a_faq_model()
    {
        FaqEntry::create([
            'question' => 'sample query?',
            'answer' => 'nothing just do it',
            'category_id' => 1
        ]);

        $this->assertDatabaseCount('faq_entries',1);
    }
     /** @test */
     public function it_will_fetch_category_of_query(){
        Category::create(['name' => 'General']);
        FaqEntry::create([
            'question' => 'sample query?',
            'answer' => 'nothing just do it',
            'category_id' => 1
        ]);
        $category = FaqEntry::first()->category->name;
        $this->assertEquals($category,'General');
    }
}
