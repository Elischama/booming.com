<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    //
    protected $fillable = [
        "name",
        "comment",
        "user_id",
        "annonce_id"
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function annonce(){
        return $this->belongsTo('App\Annonce');
    }
}
