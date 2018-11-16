<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Http\Request;

class SendMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $name;

    public $email;

    public $phoneNumber;

    public $type;

    public $subject;

    public $message;


    public function __construct(Array $request )
    {
        //
        $this->name = $request['name'];

        $this->email = $request['email'];

        $this->phoneNumber = $request['phoneNumber'];

        $this->type = contactType( $request['type'] );

        $this->subject = $request['subject'];

        $this->message = $request['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {


        return $this->from(
            $this->email, 
            $this->name 
                        )
                    ->markdown('email.message.created')
                    ->text('email.message.createdText');

    }
}
