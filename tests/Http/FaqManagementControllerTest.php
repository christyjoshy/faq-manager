<?php

namespace Christyjoshy\FaqManager\Tests;

use Christyjoshy\FaqManager\Models\FaqEntry;

class FaqManagementControllerTest extends TestCase
{
    /** @test */
    public function it_can_create_faq()
    {
        FaqEntry::create([
            'question' => 'sample query?',
            'answer' => 'nothing just do it',
            'category_id' => 1,
        ]);

        $this->assertDatabaseCount('faq_entries', 1);
    }
}
