<?php

use App\Mail\ExampleMail;
use App\Mail\UserWelcome;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/test-email-markdown', function () {
    // return (new UserWelcome())->render();

    // Mail::to('carlos@especializati.com.br')
    //         ->queue(new UserWelcome);

    // Mail::to('carlos@especializati.com.br')
    //         ->later(now()->addSeconds(3), new UserWelcome);

    Mail::to('carlos@especializati.com.br')
            ->send(new UserWelcome);

    return 'ok';
});

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
