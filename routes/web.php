<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('/contact', 'contact_form')->name('contact.form');

Route::post('/send-mail', [MailController::class, 'sendMail'])->name('send.email');
