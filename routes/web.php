<?php

use Christyjoshy\FaqManager\Http\Controllers\CategoryManagementController;
use Christyjoshy\FaqManager\Http\Controllers\FaqManagementController;
use Christyjoshy\FaqManager\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use Christyjoshy\FaqManager\Http\Livewire\Categories;
use Christyjoshy\FaqManager\Http\Livewire\Counter;
use Christyjoshy\FaqManager\Http\Livewire\Faq;
use Christyjoshy\FaqManager\Http\Livewire\FrontendFaq;

Route::macro('category',function(string $prefix){
    Route::prefix($prefix)->group(function(){
        Route::get('/', [CategoryManagementController::class,'index'])->name('category.index');
        Route::get('/create', [CategoryManagementController::class,'create'])->name('category.create');
        Route::post('/store', [CategoryManagementController::class,'store'])->name('category.store');
        Route::get('/edit/{category}', [CategoryManagementController::class,'edit'])->name('category.edit');
        Route::put('/update/{category}', [CategoryManagementController::class,'update'])->name('category.update');
        Route::delete('/destroy/{category}', [CategoryManagementController::class,'destroy'])->name('category.destroy');
    });
});
Route::macro('queries',function(string $prefix){
    Route::prefix($prefix)->group(function(){
        Route::get('/', [FaqManagementController::class,'index'])->name('faq.index');
        Route::get('/create', [FaqManagementController::class,'create'])->name('faq.create');
        Route::post('/store', [FaqManagementController::class,'store'])->name('faq.store');
        Route::get('/edit/{faq}', [FaqManagementController::class,'edit'])->name('faq.edit');
        Route::put('/update/{faq}', [FaqManagementController::class,'update'])->name('faq.update');
        Route::delete('/destroy/{faq}', [FaqManagementController::class,'destroy'])->name('faq.destroy');
    });
});
Route::macro('faq',function(string $prefix){
    Route::prefix($prefix)->group(function(){
        Route::get('/', [FrontendController::class,'index'])->name('frontend.index');
    });
});

//livewire routes


Route::macro('faqbackendlivewire',function(string $prefix){
    Route::prefix($prefix)->group(function(){
        Route::get('/categories', Categories::class)->name('backend.category.livewire');
        Route::get('/counter', Counter::class)->name('backend.counter.livewire');
        Route::get('/queries', Faq::class)->name('backend.faq.livewire');
        Route::get('/faq', FrontendFaq::class)->name('frontend.faq.livewire');
    });
});

?>
