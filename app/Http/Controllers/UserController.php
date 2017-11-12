<?php

namespace App\Http\Controllers;

use App\Annonce;
use App\Category;
use App\Image;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use function Sodium\add;

class UserController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function UserAccount(){

        return view('user.profile');
    }

    public function UserAnnonce(){

        return view('user.annonces');
    }

    public function UserAnnonceSave(Request $request, Guard $auth){

        $validator = Validator::make($request->all(), [
            'categorie_id' => 'required',
            'name' => 'required',
            'city' => 'required',
            'situation' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'description' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput()->with('danger', 'Veullez renseigner les champs importants');
        }else{

            $data = Annonce::create([
                'categorie_id' => $request->input('categorie_id'),
                'name' => addslashes($request->input('name')),
                'city' => addslashes($request->input('city')),
                'situation' => addslashes($request->input('situation')),
                'mobile' => $request->input('mobile'),
                'fixe' => $request->input('fixe'),
                'email' => $request->input('email'),
                'strong_point' => addslashes($request->input('strong_point')),
                'description' => addslashes($request->input('description')),
                'user_id' => $auth->id()
            ]);

            if (count($request->file('image')) > 0){

                $destination_path = public_path('assets/img/annonces');

                $extention = array(
                    'jpg', 'JPG', 'png', 'PNG', 'JPEG', 'jpeg', 'GIF', 'gif'
                );

                foreach ($request->file('image') as $image){

                    if (in_array($image->getClientOriginalExtension(), $extention)) {

                        $imageName = date('Y') . '_' . rand(0, 1000000000) . '_' . date('d') . '_' . rand(0, 1000000000) . '_' . date('m') . '_' . rand(0, 1000000000) . '_booming.' . $image->getClientOriginalExtension();

                        $image->move($destination_path, $imageName);

                        Image::create([
                            'name' => $imageName,
                            'annonce_id' => $data->id
                        ]);
                    }

                }

            }

        }

        return redirect()->route('user.account.annonce.list')->with('success', 'Votre annonce est en cours de traitement, vous recevrais un email lorqu\'elle sera aprouvé');
    }

    public function UserAnnonceList(Guard $auth){

        $datas = Annonce::where('user_id', $auth->id())->OrderBy('id', 'desc')->get();

        return view('user.list', compact('datas'));
    }

    public function UserSetting(Guard $auth){

        $user = User::find($auth->id());

        return view('user.setting', compact('user'));
    }

    public function UserSettingSave(Request $request, Guard $auth){

        $validator = Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'mobile' => 'required'
        ]);

        if ($validator->fails()){
            return back()->withInput()->withErrors($validator)->with('danger', 'Veuillez renseigner les champs');
        }else{

            $user = User::find($auth->id());

            $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
            $user->email = $request->input('email');
            $user->mobile = $request->input('mobile');

            $user->save();
        }

        return back()->with('success', 'Vous avez modifié votre profil avec succès');
    }
}
