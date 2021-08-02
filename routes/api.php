<?php

use Christyjoshy\FaqManager\Http\Controllers\CategoryManagementController;
use Christyjoshy\FaqManager\Http\Controllers\FaqManagementController;
use Christyjoshy\FaqManager\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use Christyjoshy\FaqManager\Http\Livewire\Categories;
use Christyjoshy\FaqManager\Http\Livewire\Counter;
use Christyjoshy\FaqManager\Http\Livewire\Faq;
use Christyjoshy\FaqManager\Http\Livewire\FrontendFaq;

Route::macro('categoryApi',function(string $prefix){
    Route::prefix($prefix)->group(function(){
        Route::get('/', [CategoryManagementController::class,'index'])->name('api.category.index');
        Route::get('/create', [CategoryManagementController::class,'create'])->name('api.category.create');
        Route::post('/store', [CategoryManagementController::class,'store'])->name('api.category.store');
        Route::get('/edit/{category}', [CategoryManagementController::class,'edit'])->name('api.category.edit');
        Route::put('/update/{category}', [CategoryManagementController::class,'update'])->name('api.category.update');
        Route::delete('/destroy/{category}', [CategoryManagementController::class,'destroy'])->name('api.category.destroy');
    });
});
Route::macro('queriesApi',function(string $prefix){
    Route::prefix($prefix)->group(function(){
        Route::get('/', [FaqManagementController::class,'index'])->name('api.faq.index');
        Route::get('/create', [FaqManagementController::class,'create'])->name('api.faq.create');
        Route::post('/store', [FaqManagementController::class,'store'])->name('api.faq.store');
        Route::get('/edit/{faq}', [FaqManagementController::class,'edit'])->name('api.faq.edit');
        Route::put('/update/{faq}', [FaqManagementController::class,'update'])->name('api.faq.update');
        Route::delete('/destroy/{faq}', [FaqManagementController::class,'destroy'])->name('api.faq.destroy');
    });
});
Route::macro('faqApi',function(string $prefix){
    Route::prefix($prefix)->group(function(){
        Route::get('/', [FrontendController::class,'index'])->name('api.frontend.index');
    });
});

?>
