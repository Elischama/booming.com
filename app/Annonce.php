<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    //
    protected $fillable = [
        ""
    ];

    public function services(){
        return $this->hasMany('\App\Service');
    }
}
