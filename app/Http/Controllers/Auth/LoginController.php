<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::where('email', $request['email'])->first();

        if ($user === null) {
            return response(['mail' => 'Compte Existe Pas !! ', 'redirect' => false]);
        } elseif ($user->active === 'inactive') {
            return response(['mail' => 'Compte Inactive !! ', 'redirect' => false]);
        } elseif ($user->active === 'active') {
            if (auth()->attempt(array('email' => $request['email'], 'password' => $request['password']))) {
                return response(['redirect' => true]);
            } else {
                return response(['pass' => 'Password Incorrect !!']);
            }
        }
    }
}
