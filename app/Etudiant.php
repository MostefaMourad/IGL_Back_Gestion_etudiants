<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = [
        'email',
        'password',
        'nom',
        'prenom',
        'niveau',
        'section',
        'groupe',
        'specialite',
        'date_naissance',
        'adresse',
        'indicateur_promo'
    ];
    
}
