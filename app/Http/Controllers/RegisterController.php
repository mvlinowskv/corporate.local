<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class RegisterController extends Controller
{
    //

    public function create() {
        return view('registration.create');
    }

    public function store(array $request) {
        $request->validate(request(), [
            'name'                  => 'required',
            'email'                 => 'required',
            'password'              => 'required'
        ]);


        if(User::where('email', '=', $request->input('email'))->first() == null && User::where('name', '=', $request->input('name'))->first() == null) {
            $user = User::create(request(['name', 'email', 'password']));
            auth()->login($user);

            return redirect()->to('/articles');
        } else {
            return "Change email or name! These user live!";
        }
        

        
    }
}
