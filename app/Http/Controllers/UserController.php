<?php

namespace App\Http\Controllers;

use App\Annonce;
use App\Category;
use App\Image;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use function Sodium\add;
use Symfony\Component\Console\Tests\Input\InputArgumentTest;

class UserController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function UserAccount(){

        return view('user.profile');
    }

    public function UserAnnonce(Guard $auth){

        $id = Input::get('id');

        if (!empty($id)) {

            $data = Annonce::find($id);

            if (empty($data) OR $data->user_id != $auth->id()) {

                return redirect('/404');
            }

            $strongPoints[] = explode(',', $data->strong_point);

//            dd(sizeof($strongPoints[0]));

            $images = Image::where('annonce_id', $data->id)->get();

            return view('user.annonces', compact('data', 'strongPoints', 'images'));
        }else {

            return view('user.annonces');
        }
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

                $destination_path = public_path('assets/img/images');

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

        $datas = Annonce::where('user_id', $auth->id())
            ->where('statut', 1)
            ->OrderBy('id', 'desc')
            ->get();

        return view('user.list', compact('datas'));
    }

    public function UserAnnonceArchive(Guard $auth){

        $datas = Annonce::where('user_id', $auth->id())
            ->where('statut', 0)
            ->OrderBy('id', 'desc')
            ->get();

        return view('user.archive', compact('datas'));
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

    public function UserAnnonceUpdate(Request $request, $id){

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

            $data = Annonce::find($id);

            $data->categorie_id = $request->input('categorie_id');
            $data->name = addslashes($request->input('name'));
            $data->city = addslashes($request->input('city'));
            $data->situation = addslashes($request->input('situation'));
            $data->mobile = $request->input('mobile');
            $data->fixe = $request->input('fixe');
            $data->email = $request->input('email');

            if (!empty($request->input('strong_point'))){
                $data->strong_point = $data->strong_point .','. addslashes($request->input('strong_point'));
            }

            $data->description = addslashes($request->input('description'));

            $data->save();

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

        return redirect()->route('user.account.annonce.list')->with('success', 'Vous avez modifier une annonce avec succès');
    }

    public function UserAnnonceDisable(Request $request, $id, Guard $auth){

        $data = Annonce::find($id);

        if (empty($data) OR $data->user_id != $auth->id()){
            return redirect('/404');
        }else{

            $data->statut = 0;
            $data->save();

        }

        if ($request->ajax()){
            return response()->json(['success' => 'Vous avez désactivé une annonce avec succès']);
        }

        return redirect()->route('user.account.annonce.list')->with('success', 'Vous avez désactivé une annonce avec succès');
    }

    public function UserAnnonceEnable(Request $request, $id, Guard $auth){

        $data = Annonce::find($id);

        if (empty($data) OR $data->user_id != $auth->id()){
            return redirect('/404');
        }else{

            $data->statut = 1;
            $data->save();

            if ($request->ajax()){
                return response()->json(['success' => 'Vous avez rétiré cette annonce de vos archives avec succès']);
            }

            return redirect()->route('user.account.annonce.list')->with('success', 'Vous avez activé une annonce avec succès');
        }
    }

    public function UserAnnonceDelete(Request $request, $id, Guard $auth){

        $data = Annonce::find($id);

        if (empty($data) OR $data->user_id != $auth->id()){
            return redirect('/404');
        }else{

            $data->delete();

            if ($request->ajax()){
                return response()->json(['success' => 'Vous avez supprimé votre annonce avec succès']);
            }

            return redirect()->route('user.account.annonce.list')->with('success', 'Vous avez supprimé une annonce avec succès');
        }
    }

    public function UserAnnonceStrongPointDelete(Guard $auth){

        $id = Input::get('annonce');
        $data = Annonce::find($id);
        $tag = Input::get('tag').',';
//        $tag = Input::get('tag');

        if ($data->user_id != $auth->id()){

            return response()->json(['danger' => 'Une erreure est survenue, veuillez réesayer']);
        }else{

            $newStrongPoint = str_replace($tag, '', $data->strong_point);

            $data->strong_point = $newStrongPoint;
            $data->save();

            return back();
        }
    }

    public function UserAnnonceImageDelete(Guard $auth){

        $id = Input::get('picture_id');
        $annonce = Input::get('annonce');

        $data = Image::find($id);

        if ($data->annonce_id != $annonce){

            return response()->json(['danger' => 'Une erreure est survenue, veuillez réesayer']);
        }else{

            $data->delete();
            return back();
        }
    }
}
