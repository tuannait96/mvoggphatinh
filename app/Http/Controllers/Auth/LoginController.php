<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Dutu;

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

    //function direct affter login
    protected function redirectTo()
    {
		$id=Auth::user()->roleid;
        if (Auth::user()->roleid==1) {
            //dd();
            return '/admin';
        }
		else
		{
			return '/home';
			if(Dutu::get()->where(Auth::user()->id)->count()==0)
			{
				
				//$error;
				$user=Auth::user();
				$dutu=Dutu::get()->where('id',$id)->first();
				//return '/home';
				//return ('/dutu/update');
				//return view('auth.update_info',compact('dutu','user'));
				return ('/dutu/update')->with(['dutu' => $dutu,'user' => $user]);
			}
			else
			{
				return '/home';
			}
			
		}
    }


    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
