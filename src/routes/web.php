<?php

use Illuminate\Support\Facades\Route;
use Adan\Http\Controllers\FormController;

Route::get("form", [FormController::class, 'index']);
Route::post("adan-form", [FormController::class, 'store'])->name('adan');
