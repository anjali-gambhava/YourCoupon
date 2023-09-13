<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller {
    public function signin(Request $request) {
        if ($request->session()->has('user')) {
            return redirect('/');
        }

        if ($request->getMethod() == 'POST') {
            $request->session()->put('user', [ 'email' => $request->username ]);
            return redirect('/');
        }

        return view('signin');
    }

    public function signout(Request $request) {
        if ($request->session()->has('user')) {
            $request->session()->flush();
        }
        
        return redirect('/');
    }
}
