<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;
use Session;
use Mail;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    // email Register 
        public function register(Request $request){


        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->socialite_method = $request->socialite_method;
        $users->password = Hash::make($request['password']);
        $users->investment = $request->investment;


        // email //
        $data=['name'=>"Pulse Realty",'data'=>"Hello"];
        $user['to']=$users->email;
        Mail::send('auth.register_mail',$data,function($messages) use ($user){
            $messages->to($user['to']);
            $messages->subject('Register');
        });
        // email //
        
        if($users->save()){
            if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
                $request->session()->regenerate();
                return redirect('/')->withSuccess('You have signed-in');
            }else{
                return redirect()->back()->with('error','Invalid Credentials!');
            }

        }else{
            return redirect()->back()->with('error','Something went wrong!');
        }
    }




    public function resetPassword(Request $request)
    {
        $email = $request->input('email');
        $user = User::where('email', $email)->where('socialite_method','google')->orWhere('socialite_method','facebook')->first();
        if ($user) {
            return response()->json(['exists' => true]);
        } else {
            return response()->json(['exists' => false]);
        }
    }


    

    // email validation 
    public function checkEmail(Request $request)
    {
        $email = $request->input('email');

        $user = User::where('email', $email)->first();

        if ($user) {
            return response()->json(['message' => 'Email already exists']);
        } else {
            return response()->json(['message' => 'Email available']);
        }
    }









        // social register 
        public function social_register(){
            return view('auth.social-signup');

        } 
     
        // google
     public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
     }

     public function handleGoogleCallback(){


        $user=Socialite::driver('google')->user();   
        $user_table=User::where('email',$user->email)->first();

        // echo '<pre>';
        // print_r('asdas');
        // print_r($user_table);
        // exit;

        if($user_table == ''){   
            $this->_registerOrLoginUser($user);
            return redirect()->to('/social_investment1');
        } 
        elseif($user_table->socialite_method == 'google'){
            $this->_registerOrLoginUser($user); 
            return redirect()->to('/');
        }
        elseif($user_table->socialite_method == 'email' || $user_table->socialite_method == 'facebook' ){
        // Session::flash('message', "You are already login with ".$user_table->socialite_method);
         return redirect()->to('/')->withErrors([
            'email' => __('auth.failed'),
        ])->with('error', 'You are already registered with '.$user_table->socialite_method);
        }

       

       
        
     }


     // facebook 
    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
     }

     public function handleFacebookCallback(){
         $user= Socialite::driver('facebook')->user();
          $this->_registerOrLoginUser($user);
        return redirect()->route('index');
     }

     protected function _registerOrLoginUser($data){
        $user = User::where('email', '=',$data->email)->first();
        if(!$user){
            $user=new User();
            $user->name=$data->name;
            $user->email=$data->email;
            $user->provider_id=$data->provider_id;
            $user->avatar=$data->avatar;
            $user->save();

        }
        Auth::login($user);
     }

     public function social_investment1(){
        return view('auth.social_investment');
     }









 
     public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('/');
    }


}