<?php

namespace Christyjoshy\FaqManager\Tests;

use Illuminate\Support\Facades\Route;

class FaqManagementControllerTest extends TestCase
{
    public function it_can_display_list_of_faq()
    {
        Route::queries('test');
        $this->get('/test')->assertOk();
    }
}
