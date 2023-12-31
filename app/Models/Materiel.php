<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;

    protected $table = 'materiels';
    
    protected $fillable = [
        'description',
        'num_serie',
        'cout_acquisition',
        'date_acquisition',
        'statut'
    ];
}
