<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    //
    protected $fillable = [
        "id",
        "note",
        "comment"
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function annonce(){
        return $this->belongsTo('App\Annonce');
    }
}
