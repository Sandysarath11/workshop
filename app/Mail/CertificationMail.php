<?php

namespace App\Mail;

use App\Models\Student;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CertificateMail extends Mailable
{
    use Queueable, SerializesModels;

    public $student;

    // Constructor accepts a student object
    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function build()
    {
        return $this->subject('Certificate of Completion')
                    ->view('emails.certificate'); // Use a Blade template for the email
    }
}

