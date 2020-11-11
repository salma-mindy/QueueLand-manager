<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    /**
     * Attributes that can be mass assigned
     *
     * @var array
     */
    protected $fillable = [
        'client_id',
        'commune',
        'agence', 
        'numero_ticket', 
        'date_rdv', 
        'periode', 
        'description'
    ];

    /**
     * A rdv is belongs to a clients
     *
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */
    public function client()
    {
        return $this->belongsTo(Clients::class);
    }

    /**
     * rdv can have as many feedback as possible
     * 
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */
    public function feedback(){
        return $this->hasMany(Feedback::class);
    }
}
