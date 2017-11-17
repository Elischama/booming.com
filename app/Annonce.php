<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    //
    protected $fillable = [
        'categorie_id', 'name', 'city', 'situation', 'mobile', 'email', 'description', 'user_id', 'fixe', 'strong_point', 'promoted', 'verified', 'statut'
    ];

    public function services(){
        return $this->hasMany('App\Service');
    }

    public function images(){

        return $this->hasMany('App\Image');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function categorie(){
        return $this->belongsTo('App\Category');
    }

    public function themes(){
        return $this->belongsToMany('App\Theme');
    }

    public function comments(){
        return $this->hasMany('App\Commentaire');
    }
}
