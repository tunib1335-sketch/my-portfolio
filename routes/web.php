<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

use App\Http\Controller\ProfileController;
Route::post('/upload-profile', [ProfileController::class, 'uploadProfile'])->name('upload.profile');