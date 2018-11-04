<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\User;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function SocialLogin($social)
    {
        //dd($social);
        return Socialite::driver($social)->redirect();
    }

    public function hadleProviderCallback($social)
    {
        $userSocial = Socialite::driver($social)->stateless()->user();
        dd($userSocial);
        return response()->json(['user'=>$userSocial]);
        // if($user)
        // {
        //     Auth::login($user);
        //     return response("LogedIn");
        // }
        // else
        // {
        //     return response("Failed Logedin");
        // }
    }
}
