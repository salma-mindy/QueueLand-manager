<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    /**
     * Attributes that can be mass assigned
     *
     * @var array
     */
    protected $fillable = [
        'client_id',
        'rdv_id',
        'note', 
        'avis'
    ];

    /**
     * A Feedback is belongs to a rdv
     *
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */
    public function rdv()
    {
        return $this->belongsTo(Rdv::class);
    }
}
