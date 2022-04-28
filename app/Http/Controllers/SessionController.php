<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class SessionController extends Controller
{
    //

    public function create() {
        return view('sessions.create');
    }

    public function store()  {
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect'
            ]);
        }

        return redirect()->to('/articles');
    }

    public function destroy() {
        auth()->logout();

        return redirect()->to('/articles');
    }
}
