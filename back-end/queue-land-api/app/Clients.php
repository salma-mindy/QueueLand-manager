<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Clients extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * Attributes that can be mass assigned
     * 
     * @var Array
     */
    protected $fillable = [
        'phone', 
        'commune',
        'nom', 
        'prenom', 
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     * 
     * @var Array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * clients can have as many rdv as possible
     * 
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */
    public function rdv(){
        return $this->hasMany(Rdv::class);
    }

    /**
     *  Get the identifier that will be stored in the subject claim of the JWT.
     * 
     * @return mixed
     */
    public function getJWTIdentifier(){
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     * 
     * @return array
     */
    public function getJWTCustomClaims(){
        return [];
    }
}
