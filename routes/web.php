<?php

use Christyjoshy\FaqManager\Http\Controllers\CategoryManagementController;
use Christyjoshy\FaqManager\Http\Controllers\FaqManagementController;
use Christyjoshy\FaqManager\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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
    });
});
Route::macro('faq',function(string $prefix){
    Route::prefix($prefix)->group(function(){
        Route::get('/frontend', [FrontendController::class,'index'])->name('frontend.index');   
    });
});

?>