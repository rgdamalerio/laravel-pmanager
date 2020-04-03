<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Redirect;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|max:25'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            return redirect()->intended('companies');
        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
}