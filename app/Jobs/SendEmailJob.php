<?php

namespace App\Jobs;
use Illuminate\Support\Facades\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Mail\AppFormMail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public function __construct()
    {
        //$this->student = $student;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle($student)
    {
        //$email = new AppFormMail($student);
        Mail::to('to@example.com')->send(new AppFormMail($student));
    }
}
