<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        return view('pages.welcome');
    }

    public function hotels(){
        return view('pages.hotels');
    }

    public function maquis(){
        return view('pages.maquis');
    }

    public function restaus(){
        return view('pages.restaus');
    }

    public function description(){
        return view ('pages.description');
    }
}
