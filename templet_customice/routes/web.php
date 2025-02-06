<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');
});
Route::get('/add-user', function () {
    return view('pages.user.add_user');
});
Route::get('/manage-user', function () {
    return view('pages.user.manage_users');
});
Route::get('/servicers', function () {
    return view('pages.services.services');
});
// Route::get('add-user', [StudentController::class,'add_user'])->name('add-user');
// Route::post('store', [StudentController::class,'store'])->name('store');
Route::get('manage-user',[StudentController::class,'show']);
