<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyUser extends Mailable
{
    use Queueable, SerializesModels;

    private $name,$link;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$link)
    {
        $this->name = $name;
        $this->link = $link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.verifyEmail')->subject('DEMO APP : Verify email')->with([
            'link' => $this->link,
            'name' => $this->name,
        ]);
    }
}
