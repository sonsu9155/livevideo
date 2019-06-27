<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Auth;
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
    protected $redirectTo = '/vipvideo';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware('guest')->except('logout');
    }

      /**
     * Check either username or email.
     * @return string
     */
    public function username()
    {
        $identity  = request()->get('identity');
        $fieldName = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        request()->merge([$fieldName => $identity]);
        return $fieldName;
    }
    /**
     * Validate the user login.
     * @param Request $request
     */
    protected function validateLogin(Request $request)
    {
        $this->validate(
            $request,
            [
                'identity' => 'required|string',
                'password' => 'required|string',
            ],
            [
                'identity.required' => 'Username or email is required',
                'password.required' => 'Password is required',
            ]
        );
    }
    /**
     * @param Request $request
     * @throws ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        $request->session()->put('login_error', trans('auth.failed'));
        throw ValidationException::withMessages(
            [
                'error' => [trans('auth.failed')],
            ]
        );
    }

    // public function authenticate(Request $request)
    // {
    //     var_dump('test');exit();
    //     $credentials = $request->only('identify', 'password');

    //     if (Auth::attempt($credentials)) {
    //         // Authentication passed...

            
    //         return redirect()->intended('/vipvideo');
    //     }
    // }

    // public function login(){
    //     return view('auth.login');
    // }

    // public function dologin(Request $request){
    //     $fieldname = $this->username();
    //     $password = $request->password;
    //     $identity = $request->identity;
    //     //$credentials = $request->only('identity', 'password');
    //     //

    //     if (Auth::attempt([$fieldname => $identity  , 'password' => $password ])){
    //         //var_dump(Auth::user()->id);exit();
    //         return redirect('/vipvideo');
    //     }

    // }

    public function logout(){

        Auth::logout();
        return redirect('/');
    }
}
