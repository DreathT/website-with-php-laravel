<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class SignupController extends Controller
{

    public function show() {

        return view('auth.signup');

    }

    protected $redirectTo = RouteServiceProvider::HOME;


    protected function create(Request $request)
    {

        $validator = Validator::make(request() -> all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($validator->fails()) {
            return redirect('/signup')
                ->withErrors($validator)
                ->withInput();
        }

            User::create([
            'name' => request() -> input('name'),
            'email' => request() -> input('email'),
            'password' => Hash::make($request['password']),
        ]);

            return redirect($this->redirectTo);
    }


}
