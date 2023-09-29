<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    //
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $attribute = request()->validate([
            'name' => 'required|string|max:255',
            'username' => ['required', 'string', 'min:3', 'max:255', Rule::unique('users', 'username')],
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create($attribute);

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created!');
    }
}
