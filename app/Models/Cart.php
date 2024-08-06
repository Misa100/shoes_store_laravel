<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    // Relation avec le modèle User (un panier appartient à un utilisateur)
    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    // Relation avec le modèle Product (un panier peut contenir plusieurs produits)
    public function products()
    {
        return $this->belongsToMany(Products::class);
    }
}
