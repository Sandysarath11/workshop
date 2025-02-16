<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Student;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
{
    // Validate user and student details
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
        'age' => ['required', 'integer', 'min:1'],
        'class' => ['required', 'string', 'max:255'],
        'section' => ['required', 'string', 'max:255'],
        'contact' => ['required', 'string', 'max:15'],
    ]);

    // Create a new user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // Store student details
    $student = new Student([
        'user_id' => $user->id,  // Associate the student with the user
        'age' => $request->age,
        'class' => $request->class,
        'section' => $request->section,
        'contact' => $request->contact,
    ]);

    // Save the student details to the database
    $student->save();

    // Trigger Registered event for the user
    event(new Registered($user));

    // Log the user in
    Auth::login($user);

    // Redirect to the dashboard after successful registration
    return redirect(route('dashboard'));
}
}
