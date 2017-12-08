<?php

namespace App\Http\Controllers;

use App\Annonce;
use App\Commentaire;
use App\Image;
use App\Note;
use App\Reservation;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $recommandes = Annonce::where('promoted', '=', 1)->take(4)->get();
        $moyennes = \DB::table('annonces')->join('commentaires','annonces.id','commentaires.annonces_id')->select('annonces.*', \DB::raw('AVG(commentaires.note) AS moy'))->groupBy('annonces.id')->orderBy('moy','desc')->take(4)->get();
        $plusVus = Annonce::orderBy('vues','desc')->get() ;


        return view('pages.welcome', compact("nouveautes", "moyennes", "plusVus", "recommandes"));
    }

    public function AnnonceHotel(){

        $annonces = Annonce::where('categorie_id', 1)->paginate(10);

        foreach ($annonces as $annonce){
            $annonce['strong_point'] = explode(',', $annonce->strong_point);
        }
//        $strongPoins[] = explode(',', $annonces->strong_point);

        return view ('pages.annonces.list', compact('annonces'));
    }

    public function AnnonceResto(){

        $annonces = Annonce::where('categorie_id', 2)->paginate(10);

        foreach ($annonces as $annonce){
            $annonce['strong_point'] = explode(',', $annonce->strong_point);
        }
//        $strongPoins[] = explode(',', $annonces->strong_point);

        return view ('pages.annonces.list', compact('annonces'));
    }

    public function AnnonceMaqui(){

        $annonces = Annonce::where('categorie_id', 3)->paginate(10);

        foreach ($annonces as $annonce){
            $annonce['strong_point'] = explode(',', $annonce->strong_point);
        }
//        $strongPoins[] = explode(',', $annonces->strong_point);

        return view ('pages.annonces.list', compact('annonces'));
    }

    public function showAnnonce($slug){

        $data = Annonce::where('slug', $slug)->first();

        if (empty($data)){
            return redirect('/404');
        }

        $data->vues = $data->vues + 1;
        $data->save();

        $data['service'] = explode(',', $data->strong_point);


        $pictures = Image::where('annonce_id', $data->id)->get();

        //commentaire
        $comments = Commentaire::where('annonce_id', $data->id)->get();

        //note
        $notes = Note::where('annonce_id', $data->id)->get();

        if (empty($notes)){
            $data['note'] = 0;
        }else{
            $noteSomme = 0;
            foreach ($notes as $value) {
                $noteSomme = $noteSomme + $value->note;
            }

            $data['note'] = ceil($noteSomme / 5);
        }

        return view('pages.annonces.show', compact('data', 'pictures', 'comments'));
    }

    public function CommentSave(Request $request, $id, Guard $auth){

        $validator = Validator::make($request->all(), [
            'comment' => 'required'
        ]);
        if ($validator->fails()){
            return response()->json(['error' => 'Veuillez renseigner votre commentaire']);
        }else{

            Commentaire::create([
                'name' => $request->input('name'),
                'comment' => $request->input('comment'),
                'user_id' => $auth->id(),
                'annonce_id' => $id
            ]);

            $user = User::find($auth->id());
        }

        if (!empty($user->avatar)) {
            return response()->json(['username' => $user->firstname . ' ' . $user->lastname, 'avatar' => $user->avatar, 'comment' => $request->input('comment')]);
        }else{
            return response()->json(['username' => $user->firstname . ' ' . $user->lastname, 'comment' => $request->input('comment')]);
        }
    }

    public function NoteSave(Request $request, $id){

        Note::create([
            'note' => $request->input('note'),
            'remarque' => $request->input('remarque'),
            'annonce_id' => $id
        ]);

        return response()->json(['success' => 'ok']);
    }

    public function ReservationSave(Request $request, $id, Guard $auth){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mobile' => 'required',
            'message' => 'required'
        ]);
        if ($validator->fails()){

            if ($request->ajax()) {
                return response()->json(['error' => 'Veuillez renseigner tous les champs']);
            }else{
                return back()->withErrors($validator)->withInput()->with('danger', 'Veuillez renseigner tous les champs');
            }
        }else{

            Reservation::create([
                'name' => $request->input('name'),
                'mobile' => $request->input('mobile'),
                'message' => $request->input('message'),
                'annonce_id' => $id
            ]);
        }

        if ($request->ajax()) {
            return response()->json(['success' => 'Votre message a été envoyé à l\'annonceur, il vous recontactera pour confirmation']);
        }else{
            return back()->with('success', 'Votre message a été envoyé à l\'annonceur, il vous recontactera pour confirmation');
        }
    }

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
       // $annonce = Annonce::where('id', $annonce->id )->first();

        $annonce = Annonce::find($annonce->id);

        $annonce->vues++;
        $annonce->save();

       // dd($annonce->all());

        return view('pages.description', ["annonce" => $annonce ]);

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
