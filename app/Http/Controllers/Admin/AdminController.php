<?php

namespace App\Http\Controllers\Admin;

use App\Annonce;
use App\Image;
use App\Mail\ConfirmationEmail;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index(Guard $auth){

        return view('admin.home.index');
    }

    //tout les utilisateur

    public function AllUsers(){

        $datas = User::OrderBy('id', 'desc')->get();

        return view('admin.users.index', compact('datas'));
    }

    //tout les utilisateur annonceur

    public function AllUsersAdvertiser(){

        $datas = User::where('type_user_id', 2)->OrderBy('id', 'desc')->get();

        return view('admin.users.advertiser', compact('datas'));
    }

    //tout les utilisateur standard

    public function AllUsersStandard(){

        $datas = User::where('type_user_id', 3)->OrderBy('id', 'desc')->get();

        return view('admin.users.standard', compact('datas'));
    }

    //tout les utilisateurs admin

    public function AllUsersAdmin(){

        $datas = User::where('type_user_id', 1)->OrderBy('id', 'desc')->get();

        return view('admin.users.admin', compact('datas'));
    }

    // supprimer un utilisateur
    public function DeleteUser(Request $request, $id){

        User::find($id)->delete();

        if ($request->ajax()){
            return response()->json(['success']);
        }
        return back();
    }

    // envoyer le mail de confirmation
    public function SendConfirmationEmail(Request $request, $id){

        $data = User::find($id);

        Mail::to($data->email)->send(new ConfirmationEmail($data));

        if ($request->ajax()){
            return response()->json(['success']);
        }

        return back();
    }

//    / chercher un admin

    public function AddNewAdmin(Request $request){

        $datas = User::where('email', 'like', '%'.$request->input('email').'%')->get();

        return response()->json(['datas' => $datas]);
    }

//    / ajouter un admin

    public function AddNewAdminAdd($id){

        $data = User::find($id);

        $data->type_user_id = 1;
        $data->save();

        return back();
    }

    // supprimer un admin

    public function DeleteAdmin($id){

        $data = User::find($id);

        $data->type_user_id = 3;
        $data->save();

        return back();
    }

//    :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

    //tous les hotels
    public function AllHotels(){

        $datas = Annonce::where('categorie_id', 1)->where('verified', 1)->OrderBy('id', 'desc')->get();

        return view('admin.annonces.hotels', compact('datas'));
    }

    //tous les restaurants
    public function AllRestaurants(){

        $datas = Annonce::where('categorie_id', 2)->where('verified', 1)->OrderBy('id', 'desc')->get();

        return view('admin.annonces.resto', compact('datas'));
    }

    //tous les maqqui
    public function AllMaquis(){

        $datas = Annonce::where('categorie_id', 3)->where('verified', 1)->OrderBy('id', 'desc')->get();

        return view('admin.annonces.maquis', compact('datas'));
    }

    //valider une annonce

    public function AnnonceValidate(Request $request, $id){

        $data = Annonce::find($id);

        $data->verified = 1;
        $data->save();

        if ($request->ajax()){
            return response()->json(['success']);
        }

        return back();
    }

    //de-valider une annonce

    public function AnnonceUnValidate(Request $request, $id){

        $data = Annonce::find($id);

        $data->verified = 0;
        $data->save();

        if ($request->ajax()){
            return response()->json(['success']);
        }

        return back();
    }

    //supprimer une annonce

    public function AnnonceDelete(Request $request, $id){

        Annonce::find($id)->delete();

        if ($request->ajax()){
            return response()->json(['success']);
        }

        return back();
    }

    //voir une annonce

    public function AnnonceShow(Request $request, $id){

        $data = Annonce::find($id);
        $images = Image::where('annonce_id', $data->id)->get();

        $strongPoins[] = explode(',', $data->strong_point);

//        dd($strongPoins);

        return view('admin.annonces.show', compact('data', 'images', 'strongPoins'));
    }

    //tous les hotels en attente de validatio
    public function AllHotelsWaiting(){

        $datas = Annonce::where('categorie_id', 1)->where('verified', 0)->OrderBy('id', 'desc')->get();

        return view('admin.annonces.waiting', compact('datas'));
    }

    //tous les restaurants
    public function AllRestaurantsWaiting(){

        $datas = Annonce::where('categorie_id', 2)->where('verified', 0)->OrderBy('id', 'desc')->get();

        return view('admin.annonces.waiting', compact('datas'));
    }

    //tous les maqqui
    public function AllMaquisWaiting(){

        $datas = Annonce::where('categorie_id', 3)->where('verified', 0)->OrderBy('id', 'desc')->get();

        return view('admin.annonces.waiting', compact('datas'));
    }
}
