<?php

use Illuminate\Support\Facades\Route;
use Adan\Http\Controllers\FormController;

Route::get("contact-form", [FormController::class, 'index'])->name('adan.form');
Route::post("contact-form", [FormController::class, 'store'])->name('adan.form.submit');
