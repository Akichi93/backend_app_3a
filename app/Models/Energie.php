<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Energie extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_energie';

    protected $fillable = [
        'uuidEnergie',
        'energie',
        'sync'
    ];
}
