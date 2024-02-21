<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'adresse', 'telephone', 'date_de_naissance', 'ville_id'
    ];
}
