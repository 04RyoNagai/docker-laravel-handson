<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    
    public function login(Request $request)
    {
        $loginId = $request->input('user_id');
        $password = $request->input('password');
        $user = User::where('login_id', $loginId)->first();
        if ($user && $user->password_digest === $password) {
            return redirect(route('projects.index'));
        }
        return redirect('login');
    }
}
