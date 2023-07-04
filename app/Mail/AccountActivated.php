<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AccountActivated extends Mailable
{
    use Queueable, SerializesModels;
    public User $user;

    /**
     * Create a new message instance.
     *
     * @param  User  $user

     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }


    public function build(): static
    {
        return $this->subject('Activation Compte')
            ->view('mail.account_activated');
    }
}
