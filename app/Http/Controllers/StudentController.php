<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Mail\CertificationMail;

class StudentController extends Controller
{
    // Show all students
    public function index()
    {
        $students = Student::with('user')->get(); 

        return view('student.index', compact('students'));
    }

    // Show a single student by ID
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('student.show', compact('student'));
    }

    public function sendCertification($studentId)
    {
        // Retrieve the student and user details
        $student = Student::findOrFail($studentId);
        $user = $student->user; // assuming there is a relation defined

        // Send the email
        Mail::to($user->email)
            ->send(new CertificateMail($student));

        return back()->with('success', 'Certification sent successfully!');
    }
}

