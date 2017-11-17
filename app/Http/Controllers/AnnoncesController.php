<?php

namespace App\Http\Controllers;

use App\Annonce;
use Illuminate\Http\Request;

class AnnoncesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nouveautes = Annonce::where('created_at', '>=', \DB::raw('DATE_SUB(NOW(), INTERVAL 7 DAY)'))->take(4)->orderBy('created_at','desc')->get();
        return view('pages.welcome', ["nouv" => $nouveautes]);
    }

    public function AnnonceHotel(){

        $annonces = Annonce::where('categorie_id', 1)->paginate(10);

        foreach ($annonces as $annonce){
            $annonce['strong_point'] = explode(',', $annonce->strong_point);
        }
//        $strongPoins[] = explode(',', $annonces->strong_point);

        return view ('pages.list', compact('annonces'));
    }

    public function AnnonceResto(){

        $annonces = Annonce::where('categorie_id', 2)->paginate(10);

        foreach ($annonces as $annonce){
            $annonce['strong_point'] = explode(',', $annonce->strong_point);
        }
//        $strongPoins[] = explode(',', $annonces->strong_point);

        return view ('pages.list', compact('annonces'));
    }

    public function AnnonceMaqui(){

        $annonces = Annonce::where('categorie_id', 3)->paginate(10);

        foreach ($annonces as $annonce){
            $annonce['strong_point'] = explode(',', $annonce->strong_point);
        }
//        $strongPoins[] = explode(',', $annonces->strong_point);

        return view ('pages.list', compact('annonces'));
    }

//    public function listeMaquis(){
//        $annonce = Annonce::where('categorie_id', 2)->get();
//        return view('pages.maquis', ["annonces" => $annonce]);
//    }
//
//    public function listeRestaus(){
//        $annonce = Annonce::where('categorie_id', 3)->get();
//        return view('pages.restaus', ["annonces" => $annonce]);
//    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    {
        //
        $annonce = Annonce::where('id', $annonce->id )->first();

        return view('pages.description', ["annonce" => $annonce]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonce $annonce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce)
    {
        //
    }
}
