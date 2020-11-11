<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Communes extends Model
{
    /**
     * Attributes that can be mass assigned
     *
     * @var array
     */
    protected $fillable = ['nom_commune', 'lng', 'lat'];
}
