<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Authenticatable
{
    use HasFactory, Notifiable;

    // Relation avec le modèle Product (un utilisateur peut avoir plusieurs produits)
    public function products()
    {
        return $this->hasMany(Products::class);
    }

    // Relation avec le modèle Message (un utilisateur peut envoyer plusieurs messages)
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    // Relation avec le modèle Cart (un utilisateur a un seul panier)
    public function cart()
    {
        return $this->hasOne(Cart::class);
    }

    // Relation avec le modèle Order (un utilisateur peut avoir plusieurs commandes)
    public function orders()
    {
        return $this->hasMany(Orders::class);
    }
}
