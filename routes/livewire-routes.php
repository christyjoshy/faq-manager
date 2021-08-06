<?php

use Illuminate\Support\Facades\Route;
use Christyjoshy\FaqManager\Http\Livewire\Categories;
use Christyjoshy\FaqManager\Http\Livewire\Counter;
use Christyjoshy\FaqManager\Http\Livewire\Faq;
use Christyjoshy\FaqManager\Http\Livewire\FrontendFaq;

Route::macro('faqlivewire',function(string $prefix){
    Route::prefix($prefix)->group(function(){
        Route::get('/categories', Categories::class)->name('backend.category.livewire');
        Route::get('/counter', Counter::class)->name('backend.counter.livewire');
        Route::get('/queries', Faq::class)->name('backend.faq.livewire');
        Route::get('/faq', FrontendFaq::class)->name('frontend.faq.livewire');
    });
});

?>
