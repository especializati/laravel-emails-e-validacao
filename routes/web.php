<?php

use App\Mail\ExampleMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/test-email', function () {
    $user = User::factory()->create();
    // return (new ExampleMail($user))->render();
    Mail::to('test@email.com')
            ->send(new ExampleMail($user));

    return 'ok';
});

Route::get('/', function () {
    return view('welcome');
});
