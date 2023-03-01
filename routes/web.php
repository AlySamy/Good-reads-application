<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\userController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[postController::class,'getPosts'])->name('home');


Route::get('/view/{id}',[postController::class,'viewPost'])->name('view.page');

Route::get('/update/{id}',[postController::class,'updatePost'])->name('update.page');
Route::put('/edit/{id}',[postController::class,'editPost'])->name('edit.page');

Route::delete('/delete/{id}',[postController::class,'deletePost'])->name('delete.page');

Route::get('/create',[postController::class,'createPost'])->name('create.page');
Route::post('/insert',[postController::class,'insertPost'])->name('insert.page');

Route::get('/user',[userController::class,'index'])->name('user.index');
Route::get('/user/{id}',[userController::class,'viewUser'])->name('user.page');


// Route::post('/create')

// Route::get('/view',function()
// {
//     return view('view');
// })->name('view.page');

// Route::get('/', function () {
//     return view('welcome');
// });
