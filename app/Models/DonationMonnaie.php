<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationMonnaie extends Model
{
    use HasFactory;
    protected $fillable = [
        'famille_id',
        'categorie_id',
        'monnaie_id',
        'devise',
        'montant',
        
    ];
}
