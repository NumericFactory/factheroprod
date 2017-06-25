<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailVerification extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.verification')
                    ->with([
                        'username' => $this->user->name
                    ])
                    ->from('fred@entrepreneo.fr', 'Fred de FactureHero.com')
                    ->replyTo('fred@entrepreneo.fr')
                    ->subject('FactureHero | Activation de votre compte')
        ;
    }
}
