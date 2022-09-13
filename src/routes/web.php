<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Nihir\Contact\Http\Controllers\ContactController;

Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::post('/contact',[ContactController::class,'send'])->name('contact');
