<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['note', 'remarque', 'user_id', 'annonce_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function annonce(){

        return $this->belongsTo('App\Annonce');
    }
}
