<?php

use App\Mail\ExampleMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/test-email', function () {
    // return (new ExampleMail([]))->render();
    $user = User::factory()->create();
    Mail::to('test@email.com')
            ->send(new ExampleMail($user));

    return 'ok';
});

Route::get('/', function () {
    return view('welcome');
});
