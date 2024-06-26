<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localisation extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_localisation';

    protected $fillable = [
        'uuidMarque',
        'marque',
        'sync'
    ];
}
