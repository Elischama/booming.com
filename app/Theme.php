<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    //
    protected $fillable = [
        'id',
        'libelle'
    ];

    public function annonces(){
        return $this->belongsToMany('App\Annonce');
    }
}
