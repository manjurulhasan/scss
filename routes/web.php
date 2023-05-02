<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/', [MailController::class, 'mailSend'])->name('mail.send');
