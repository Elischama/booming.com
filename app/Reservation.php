<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['name', 'mobile', 'message', 'annonce_id'];

    public function annonce(){
        $this->belongsTo('App\Annonce');
    }
}
