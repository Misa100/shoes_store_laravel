<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orders extends Model
{
    use HasFactory;

    // Relation avec le modèle User (une commande appartient à un utilisateur)
    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    // Relation avec le modèle Product (une commande peut contenir plusieurs produits)
    public function products()
    {
        return $this->belongsToMany(Products::class);
    }
}
