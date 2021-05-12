<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationTextile extends Model
{
    use HasFactory;
    protected $fillable = [
        'famille_id',
        'categorie_id',
        'textile_id',
        'type',
        'taille',
        'couleur',
    ];
}
