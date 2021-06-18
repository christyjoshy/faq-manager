<?php

use Christyjoshy\FaqManager\Http\Controllers\CategoryManagementController;
use Christyjoshy\FaqManager\Http\Controllers\FaqManagementController;
use Illuminate\Support\Facades\Route;

Route::macro('category',function(string $prefix){
    Route::prefix($prefix)->group(function(){
        Route::get('/', [CategoryManagementController::class,'index']);
        Route::get('/create', [CategoryManagementController::class,'create'])->name('category.create');
        Route::post('/store', [CategoryManagementController::class,'store'])->name('category.store');
    });
});
Route::macro('queries',function(string $prefix){
    Route::prefix($prefix)->group(function(){
        Route::get('/',[FaqManagementController::class,'index']);        
    });
});

?>