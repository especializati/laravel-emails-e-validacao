<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ExampleMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        private User $user
    ) {}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.users.example')
                    ->subject(trans('messages.emails.example'))
                    ->with([
                        'user' => $this->user,
                        'imageExample' => storage_path('app/download-failed.gif')
                    ]);
                    // ->attach(storage_path('app/test.txt'));
                    // ->attachData('content of txt', 'test2.txt', [
                    //     'mime' => 'application/text'
                    // ]);
    }
}
