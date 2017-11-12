<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'mobile', 'email', 'password', 'token', 'verified', 'type_user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     *
     * Boot the model.
     *
     */
    public static function boot(){
        parent::boot();

        static::creating(function ($user) {
            $user->token = str_random(40);
        });
    }

    public function hasVerified()
    {
        $this->verified = 1;
        $this->token = null;

        $this->save();
    }


    public function type_user(){

        return $this->belongsTo('App\TypeUser');
    }

    public function annonces(){

        return $this->hasMany('App\Annonce');
    }
}
