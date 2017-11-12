<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['name', 'annonce_id'];

    public function annonce(){

        return $this->belongsTo('App\Annonce');
    }
}
