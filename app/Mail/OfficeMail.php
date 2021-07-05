<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OfficeMail extends Mailable
{
    use Queueable, SerializesModels;
    public $student;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($student)
    {
        //
        $this->student = $student;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.crud.office-form');
      //  return $this->subject('New  Application Request')
         //   ->view('emails.crud.office-form')
          //  ->from('from@example.com');
    }
}
