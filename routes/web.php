<?php


use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;


Route::controller(ResultController::class)->group(function(){
    
    Route::get('/' , 'Showall')->name('home');
    
    Route::get('/student/{id}',  'singlestudent')->name('view.student');

    Route::post('/add',  'addnewresult')->name('addresult');

    Route::get('/delete/{id}',  'deleteresult')->name('delete.result');

    Route::get('/update/{id}', 'updateId')->name('update.Id');
    
    Route::post('/updateresult/{id}', 'updateresult')->name('update.result');
    
});

route::view('addnew','/newresult');