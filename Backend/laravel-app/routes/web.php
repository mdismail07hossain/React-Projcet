<?php

// use App\Http\Controllers\IsmaiController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/demo', function () {
    return view('demo');
});
Route::get('/ismail', function () {
    return view('ismail');

});
Route::get('/table', function () {
    return view('table');

});

Route::get('/', function () {
    return view('home');
});
Route::get('/cdemo', [UserController::class, 'index']);
Route::get('/tablee', [MyController::class, 'show']);
// Route::get('/ismail', [UserController::class, 'info']);
Route::get('/table',[StudentController::class,'show']);
Route::delete('delete{id}',StudentController::class.'@destroy')->name('delete');
Route::get('create', [StudentController::class,'create'])->name('create');
Route::post('store', [StudentController::class,'store'])->name('store');
Route::get('edite{id}',[StudentController::class,'update'])->name('edite');
Route::post('editeStore', [StudentController::class,'editeStore'])->name('editeStore');
// Route::get('/table',[IsmaiController::class,'show']);