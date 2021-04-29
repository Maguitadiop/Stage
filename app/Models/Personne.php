<?php

namespace App\Models;

use Famille;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'date_naiss',
        'age',
        'sexe',
        'famille_id',
    ];

    public function famille() {
        return $this->BelongsTo('App\Models\Famille','famille_id');
    }
}
