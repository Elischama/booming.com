<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function confirmEmail($token){
        $data = User::where('token', $token)->first();

        if (empty($data)){

            return redirect()->route('index')->with('info', 'Votre adresse e-mail est déjà confirmé');
        }

        User::whereToken($token)->first()->hasVerified();

        $data->save();

        return redirect('login')->with('success', 'Votre adresse e-mail a été confirmé. Connectez-vous');
    }

}
