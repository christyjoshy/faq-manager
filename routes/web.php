<?php

use Christyjoshy\FaqManager\Http\Controllers\CategoryManagementController;
use Christyjoshy\FaqManager\Http\Controllers\FaqManagementController;
use Illuminate\Support\Facades\Route;

Route::macro('category',function(string $prefix){
    Route::prefix($prefix)->group(function(){
        Route::resource('/', CategoryManagementController::class);
    });
});
Route::macro('queries',function(string $prefix){
    Route::prefix($prefix)->group(function(){
        Route::get('/',[FaqManagementController::class,'index']);        
    });
});

?>