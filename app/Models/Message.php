<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;

    // Relation avec le modèle User (un message appartient à un utilisateur)
    public function user()
    {
        return $this->belongsTo(Users::class);
    }
}
