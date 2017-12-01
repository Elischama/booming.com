<?php

namespace App\Http\Controllers;

use App\Annonce;
use App\Note;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //annonce recommandé
        $recommandes = Annonce::where('promoted', 1)->limit(3)->get();

//        dd($recommandes);

        //annonces les plus vues
        $vues = Annonce::OrderBy('vues', 'desc')->limit(6)->get();

        //annonce les mieux noté
        $notees = Annonce::OrderBy('note', 'desc')->limit(6)->get();

        return view('home.index', compact('recommandes', 'vues', 'notees'));
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

    public function indexSearch(Request $request){

        $search = $request->input('q');

        $annonces = Annonce::where('name', 'like', '%'.$search.'%')
            ->orWhere('situation', 'like', '%'.$search.'%')
            ->orWhere('description', 'like', '%'.$search.'%')
            ->orWhere('strong_point', 'like', '%'.$search.'%')
            ->orWhere('city', 'like', '%'.$search.'%')
            ->paginate(10);

        foreach ($annonces as $annonce){
            $annonce['strong_point'] = explode(',', $annonce->strong_point);
        }

//        $annonce['type'] = 'search';

        return view ('pages.annonces.list', compact('annonces'));
    }

}
