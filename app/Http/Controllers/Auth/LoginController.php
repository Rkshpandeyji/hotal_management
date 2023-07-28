<?php

namespace App\Http\Controllers\Auth;
// namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/dashboard'); // Redirect to your desired page after login
        }

        // Authentication failed
        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::guard('customguard')->logout();
        return redirect('/login');
    }

    public function showRegistrationForm()
    {
        return view('register');
    }

    public function processRegistration(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create the new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect to a page after successful registration
        return redirect('/dashboard')->with('success', 'Registration successful!');
    }
}
