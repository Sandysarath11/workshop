<?php

namespace App\Http\Controllers;

use App\Models\student; // Import the User model
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function student()
    {
        $data = student::all();
        return view('student', ['data' => $data]);
    }
}
