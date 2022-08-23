<?php

use App\Mail\ExampleMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/test-email', function () {
    // return (new ExampleMail([]))->render();
    Mail::to('test@email.com')
            ->send(new ExampleMail([]));

    return 'ok';
});

Route::get('/', function () {
    return view('welcome');
});
