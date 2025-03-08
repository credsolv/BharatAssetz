<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            // Success message
            session()->flash('success', 'Login successful! Welcome ' . $user->name . '!');

            // Redirect based on role
            return match ($user->role) {
                'admin' => redirect()->route('admin.dashboard'),
                'branch' => redirect()->route('branch.dashboard'),
                default => redirect()->route('staff.dashboard'),
            };
        }

        // Error message
        return back()->with('error', 'Invalid email or password. Please try again.');
    }

    public function logout()
    {
        Auth::logout();
        session()->flash('info', 'You have been logged out.');
        return redirect()->route('login');
    }
}
