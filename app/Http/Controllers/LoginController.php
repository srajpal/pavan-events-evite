<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'remember' => 'nullable'
        ]);

        if (Auth::attempt([
            'email' => $credentials['email'],
            'password' => $credentials['password']
        ], $credentials['remember'] ?? false)) {
            $request->session()->regenerate();
            $role = Auth::user()->role;
            $route = '';
            switch ($role) {
                case User::USER_ROLE_ADMIN:
                    $route = '/admin/dashboard';
                    break;
                case User::USER_ROLE_CLIENT:
                    $route = '/client/dashboard';
                    break;
                case User::USER_ROLE_GUEST:
                    $route = '/guest/dashboard';
                    break;
                default:
                    abort(500);
            }
            return redirect($route);
        }

        return back()->withErrors([
            'main' => 'Email and Password do not match.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
