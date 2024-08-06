<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;

    // Relation avec le modèle User (chaque produit appartient à un utilisateur)
    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    // Relation avec le modèle Cart (un produit peut être dans plusieurs paniers)
    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }

    // Relation avec le modèle Order (un produit peut être dans plusieurs commandes)
    public function orders()
    {
        return $this->belongsToMany(Orders::class);
    }
}
