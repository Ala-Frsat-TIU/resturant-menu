<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//        $user = User::all()->where("res_id", Auth::user()->id);


Route::get('/add-category', [App\Http\Controllers\CategoryController::class, 'index'])->name('get-category');

Route::post('/add-category', [App\Http\Controllers\CategoryController::class, 'store'])->name('add-category');
Route::get('/list-of-categories/{id}', [App\Http\Controllers\CategoryController::class, 'index'])->name('list-of-categories');




Route::get('/add-resturant', function () {
    return view('add.add-resturant');
});
Route::post('/add-resturant', [App\Http\Controllers\ResturantController::class, 'store'])->name('add-resturant');
Route::get('/list-of-resturants', [App\Http\Controllers\ResturantController::class, 'index'])->name('list-of-resturant');



Route::get('/add-item', function () {
    return view('add.add-item');
});


//Route::post('/delete-item/{id}', [App\Http\Controllers\ItemController::class, 'deleteItem'])->name('delete-item');
Route::delete('/delete-item/{id}', [App\Http\Controllers\ItemController::class, 'deleteItem'])->name('delete-item');


Route::post('/add-item', [App\Http\Controllers\ItemController::class, 'store'])->name('add-item');
Route::get('/add-item', [App\Http\Controllers\ItemController::class, 'getCategories'])->name('get-items');
//Route::get('/list-of-items', [App\Http\Controllers\ItemController::class, 'index'])->name('list-of-items');
Route::get('/list-of-items/res/{resid}/cat/{catid}', [App\Http\Controllers\ItemController::class, 'index'])->name('list-of-items');
Route::put('/update-item/{id}', [App\Http\Controllers\ItemController::class, 'update'])->name('update');
Route::get('/update-item/{id}', [App\Http\Controllers\ItemController::class, 'getItem'])->name('getitem');



Route::get('/list-of-users', [App\Http\Controllers\UserController::class, 'index'])->name('list-of-users');
Route::put('/list-of-users/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('list-of-users.update');
Route::get('/list-of-users/{id}', [App\Http\Controllers\UserController::class, 'getUser'])->name('getUser');
