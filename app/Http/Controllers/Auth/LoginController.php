<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
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
        $email = $request->input('email');
    
        $exists = User::where('email', $email)->exists();
        
        if ($exists) {
            $user = User::where('email', $email)->first();
            
            // Check if the socialite method is 'email'
            if ($user->socialite_method == 'email') {
                $credentials = $request->only('email', 'password');
                
                if (Auth::attempt($credentials)) {
                    // Authentication passed...
                    $user = Auth::user();
                    
                    if ($user->role == "0") {
                        return redirect()->back();
                    } else {
                        return redirect()->intended('/admin/dashboard');
                    }
                }
              
            } elseif($user->socialite_method == 'google'){
                return redirect()->back()->withInput($request->only('email'))->withErrors([
                    'email' => __('auth.failed'),
                ])->with('error', 'You are already registered with gmail');
            }
            else{
                return redirect()->back()->withInput($request->only('email'))->withErrors([
                    'email' => __('auth.failed'),
                ])->with('error', 'You are already registered with facebook');
            }
        } 
        else {
              
            return redirect()->back()->withInput($request->only('email'))->withErrors([
                'email' => __('auth.failed'),
            ])->with('error', 'Invalid email or password');
        }
    }

    
    public function logout(request $request) 
{
    Auth::logout();
    $this->guard()->logout();
    $request->session()->flush();
    $request->session()->regenerate();
    return redirect('/');
}



}
