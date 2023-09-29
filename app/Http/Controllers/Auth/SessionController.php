<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create() {
        return view('auth.login');
    }

    public function store() {
        $attribute = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($attribute)) {
            return redirect('/')->with('success', 'Login Successful!');
        };

        return back()
            ->withInput()
            ->withErrors(['email' => 'your provided email could not be logged in']);

    }
    
    public function destroy() {

        auth()->logout();

        return redirect('/')->with('success', 'Goodbye, see you again!');
    }
}
