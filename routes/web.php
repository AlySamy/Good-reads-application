<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontrolar;
use App\Http\Controllers\AuthorController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [postcontrolar::class,'index'])->name('index');

Route::get('/show/{post}',[postcontrolar::class, 'show'])->name('show');

Route :: get('/updae/{id}',[postcontrolar::class,'update'])->name('update');
Route:: put('/edit/{id}',[postcontrolar::class,'edit'])->name('edit');


Route::get('/create',[postcontrolar::class,'create'])->name('create');
Route::post('/store',[postcontrolar::class,'store'])->name('store');


Route:: delete('/destroy{post}',[postcontrolar ::class,'destroy'])->name('destroy');



Route::get('/author/index',[AuthorController::class,'index'])->name('author.index');

Route::get('author/show/{author}',[AuthorController::class,'show'])->name('author.show');








