<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'famille_id',
        'categorie_id',
        'aliment_id',
        'quantite',
        'libelle',
    ];
}
