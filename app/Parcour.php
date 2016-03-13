<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcour extends Model
{
    protected $fillable = [
        'id',
        'annee',
        'diplome',
        'description',
        'image'
    ];
}
