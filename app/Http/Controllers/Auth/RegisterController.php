<?php

namespace App\Http\Controllers\Auth;

use App\Mail\ConfirmationEmail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile' => 'required|string|max:14|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'type_user_id' => 3,
            'password' => bcrypt($data['password']),
        ]);
    }

    public function register(Request $request)
    {

        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        Mail::to($user->email)->send(new ConfirmationEmail($user));

        return redirect()->route('welcome', ['email' => addslashes($request->input('email')), 'token' => bin2hex(random_bytes(32))]);
    }

    public function confirmEmail($token){
        $data = User::where('token', $token)->first();

        if (empty($data)){

            dd($data);
            return redirect()->route('index')->with('info', 'Votre adresse e-mail est déjà confirmé');
        }

        User::whereToken($token)->first()->hasVerified();

        $data->save();

        return redirect('login')->with('success', 'Votre adresse e-mail a été confirmé. Connectez-vous');
    }

    public function welcome(){

        $email = Input::get('email');
        $token = Input::get('token');

        if (empty($token)){
            return redirect('/404');
        }

        $data = User::where('email', $email)->first();

        if (empty($data)){
            return redirect('/404');
        }

        return view('auth.welcome', compact('data'));
    }
}
